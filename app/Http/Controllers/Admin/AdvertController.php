<?php

namespace App\Http\Controllers\Admin;

use App\Advert;
use App\Category;
use App\Additionally;
use Illuminate\Http\Request;
use App\Picture;
use Image;
use App\User;
use Storage;
use File;
use Validator;
use App\Http\Controllers\Controller;


class AdvertController extends Controller
{
 
    public function index()
    {
        

        return view('admin.advert.index', [
            'adverts' => Advert::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.advert.create', [
            'advert' => [],
            'categories' => Category::with('children')->where('parent_id', 0)->get(),
            'additionallies'=> Additionally::get(),
            'delimiter' => '',
            
            ]);
        }
        
        public function store(Request $request)
        {
            
            //   dd($request);
            $advert = Advert::create($request->all());
            // Categories
             if ($request->input('categories')) :
               $advert->categories()->attach($request->input('categories'));
             endif;
            //Additionally
             if ($request->input('additionallies')) :
              foreach ($request->additionallies as  $additionally) {
                Additionally::create([
                  'name'=> $additionally,
                  'advert_id'=>$advert->id
                ]);
                                       }
             endif;
        ///////////////////////////// Picture/////////////////////////////////////////////////////////
                            
        if ($request->hasFile('picture')) {
         foreach ($request->file('picture') as $file) {
                     
                $filenamewithextension = $file->getClientOriginalName();
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $filenametostore = $filename . '_' . uniqid() . '.' . $extension;
                Storage::put('public/uploads/advert/' . $filenametostore, fopen($file, 'r+'));
                ////////////////////////////////////little/////////////////////////////
                Storage::put('public/uploads/advert/little/' . $filenametostore, fopen($file, 'r+'));
                $littlepath = public_path('storage/uploads/advert/little/' . $filenametostore);
            

                //////////////////////////делаем водяной знак/////////////////////////
                // $img2=Image::make( storage_path('10.png'))->resize(90, 80)->opacity(30);
                // $img2->save( storage_path('water1.png'));
                ///////////////////////////////////////////////////////////////////////
                $img1 = Image::make($littlepath)->resize(340, 250)
                    ->insert(storage_path('water2.png'), 'center');
                $img1->save($littlepath);
               
                // //////////////////////////////////////////////////////////////////////////////

                Storage::put('public/uploads/advert/middle/' . $filenametostore, fopen($file, 'r+'));
                $middlepath = public_path('storage/uploads/advert/middle/' . $filenametostore);
                // ////////////////////////////////////////////////////////////////////////
                // $img2=Image::make( storage_path('10.png'))->resize(180, 80)->opacity(30);
                // $img2->save( storage_path('water2.png'));
                // //////////////////////////////////////////////////////////////////////
                $img2 = Image::make($middlepath)->resize(340, 250)
                    ->insert(storage_path('water2.png'), 'center');
                $img2->save($middlepath);

                // ///////////////////////////////////////////////////////
                Storage::put('public/uploads/advert/big/' . $filenametostore, fopen($file, 'r+'));
                $bigpath = public_path('storage/uploads/advert/big/' . $filenametostore);
                ///////////////////////////////////////////////////////////////////////
                // $imgw3=Image::make( storage_path('10.png'))->resize(400, 200)->opacity(30);
                // $imgw3->save(storage_path('water3.png'));
               
                // /////////////////////////////////////////////////////////////////////
                $img3 = Image::make($bigpath)->resize(800, 640)
                ->insert(storage_path('water3.png'), 'center');
                $img3->save($bigpath);

                $url = $filenametostore;         
                /////////////////////////////////////////////////////
                $fullPath = base_path() . '/public/storage/uploads/advert/' . $filenametostore;
                File::delete($fullPath);
                ////////////////////////////////
                Picture::create([
                    'url' => $url,
                    'advert_id' => $advert->id
                ]);
             }
         }



         return redirect()->route('admin.advert.index');
    
    }

   
    public function show(Advert $advert)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Advert  $advert
     * @return \Illuminate\Http\Response
     */
    public function edit(Advert $advert)
    {

       
        
        foreach ( $advert->additionallies()->get() as $value) {
            $additionallies[]=$value->name;
        }

        return view('admin.advert.edit', [
            'advert' => $advert,
            'categories' => Category::with('children')->where('parent_id', 0)->get(),
            'additionallies' => $additionallies,
            'delimiter' => ''
        ]);
    }

    public function update(Request $request, Advert $advert)
    {
        $advert->update($request->except('slug'));
        // Categories
        $advert->categories()->detach();
        if ($request->input('categories')) :
            $advert->categories()->attach($request->input('categories'));
        endif;
        //additionallies
        $advert->additionallies()->delete();
        if ($request->input('additionallies')) :
            foreach ($request->additionallies as  $additionally) {
                Additionally::create([
                    'name' => $additionally,
                    'advert_id' => $advert->id
                ]);
            
                }
        endif;


        return redirect()->route('admin.advert.index');
     }

    
    public function destroy(Advert $advert)
    {
        for ($i = 0; $i < $advert->pictures()->count(); $i++) {
            $file = $advert->pictures()->get()[$i]->url;
            $fullPathb = base_path().'/public/storage/uploads/advert/big/' . $file;
            File::delete($fullPathb);
            $fullPathl = base_path().'/public/storage/uploads/advert/little/' . $file;
            File::delete($fullPathl);
            $fullPathm = base_path().'/public/storage/uploads/advert/middle/' . $file;
            File::delete($fullPathm);
        }
        $advert->categories()->detach();
        $advert->pictures()->delete();
        $advert->additionallies()->delete();
        $advert->delete();

        return redirect()->route('admin.advert.index');
    
    }
}
