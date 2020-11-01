<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return   [
            [
              'id'=>268,
              'name'=>'adoptionism744',
              'avatar'=>'',
              'email'=>'angelo@sashington.com',
              'phone'=>'Angelo Sashington',
              'city'=>'Angelo Sashington',
              'state'=>'Angelo Sashington',
              'country'=>'Bolivia',
              'dob'=>'28 January 1998',
              'gender'=>'male',
              'role'=>'admin',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'sales',
            //   'company'=>'WinDon Technologies Pvt Ltd',
              'mobile'=>'+65958951757',
            //   'website'=>'https://rowboat.com/insititious/Angelo',
            //   'languages_known'=>['English', 'Arabic'],
            //   'contact_options'=>['email', 'message', 'phone'],
            //   'location'=>[
            //     'add_line_1'=>'A-65, Belvedere Streets',
            //     'add_line_2'=>'',
            //     'post_code'=>'1868',
            //     'city'=>'New York',
            //     'state'=>'New York',
            //     'country'=>'United States'
            //   ],
            //   'social_links'=>[
            //     'twitter'=>'https://twitter.com/adoptionism744',
            //     'facebook'=>'https://www.facebook.com/adoptionism664',
            //     'instagram'=>'https://www.instagram.com/adopt-ionism744/',
            //     'github'=>'https://github.com/madop818',
            //     'codepen'=>'https://codepen.io/adoptism243',
            //     'slack'=>'@adoptionism744'
            //   ],
              'permissions'=>[
                'users'=>[
                  'read'=>true,
                  'write'=>false,
                  'create'=>false,
                  'delete'=>false
                ],
                'posts'=>[
                  'read'=>true,
                  'write'=>true,
                  'create'=>true,
                  'delete'=>true
                ],
                'comments'=>[
                  'read'=>true,
                  'write'=>false,
                  'create'=>true,
                  'delete'=>false
                ]
        
              ]
            ],
            [
              'id'=>269,
              'name'=>'demodulation463',
              'avatar'=>'',
              'email'=>'rubi@ortwein.com',
              'phone'=>'Rubi Ortwein',
              'city'=>'Rubi Ortwein',
              'state'=>'Rubi Ortwein',
              'country'=>'Syria',
              'role'=>'user',
              'status'=>'blocked',
              'is_verified'=>false,
            //   'department'=>'development'
            ],
            [
              'id'=>270,
              'name'=>'undivorced341',
              'avatar'=>'',
              'email'=>'donnette@charania.com',
              'phone'=>'Donnette Charania',
              'city'=>'Donnette Charania',
              'state'=>'Donnette Charania',
              'country'=>'Iraq',
              'role'=>'staff',
              'status'=>'deactivated',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>271,
              'name'=>'bumbo426',
              'avatar'=>'',
              'email'=>'ardith@duffett.com',
              'phone'=>'Ardith Duffett',
              'city'=>'Ardith Duffett',
              'state'=>'Ardith Duffett',
              'country'=>'Estonia',
              'role'=>'user',
              'status'=>'active',
              'is_verified'=>false,
            //   'department'=>'sales'
            ],
            [
              'id'=>272,
              'name'=>'ectodactylism214',
              'avatar'=>'',
              'email'=>'antone@berman.com',
              'phone'=>'Antone Berman',
              'city'=>'Antone Berman',
              'state'=>'Antone Berman',
              'country'=>'India',
              'role'=>'user',
              'status'=>'blocked',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>273,
              'name'=>'panathenaic825',
              'avatar'=>'',
              'email'=>'maryann@gour.com',
              'phone'=>'Maryann Gour',
              'city'=>'Maryann Gour',
              'state'=>'Maryann Gour',
              'country'=>'Solomon Islands',
              'role'=>'user',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>274,
              'name'=>'reptilious612',
              'avatar'=>'',
              'email'=>'holli@vanduyne.com',
              'phone'=>'Holli Vanduyne',
              'city'=>'Holli Vanduyne',
              'state'=>'Holli Vanduyne',
              'country'=>'Lebanon',
              'role'=>'staff',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>275,
              'name'=>'candid910',
              'avatar'=>'',
              'email'=>'juanita@sartoris.com',
              'phone'=>'Juanita Sartoris',
              'city'=>'Juanita Sartoris',
              'state'=>'Juanita Sartoris',
              'country'=>'Papua New Guinea',
              'role'=>'staff',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'management'
            ],
            [
              'id'=>276,
              'name'=>'ferrotungsten928',
              'avatar'=>'',
              'email'=>'lia@morga.com',
              'phone'=>'Lia Morga',
              'city'=>'Lia Morga',
              'state'=>'Lia Morga',
              'country'=>'Malaysia',
              'role'=>'user',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'development'
            ],
            [
              'id'=>277,
              'name'=>'fibered345',
              'avatar'=>'',
              'email'=>'theo@quatrevingt.com',
              'phone'=>'Theo Quatrevingt',
              'city'=>'Theo Quatrevingt',
              'state'=>'Theo Quatrevingt',
              'country'=>'Nepal',
              'role'=>'user',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>278,
              'name'=>'nonenclosure246',
              'avatar'=>'',
              'email'=>'lynwood@flud.com',
              'phone'=>'Lynwood Flud',
              'city'=>'Lynwood Flud',
              'state'=>'Lynwood Flud',
              'country'=>'Russia',
              'role'=>'user',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>279,
              'name'=>'uncandied531',
              'avatar'=>'',
              'email'=>'kaitlin@kahola.com',
              'phone'=>'Kaitlin Kahola',
              'city'=>'Kaitlin Kahola',
              'state'=>'Kaitlin Kahola',
              'country'=>'Latvia',
              'role'=>'user',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>280,
              'name'=>'errancy403',
              'avatar'=>'',
              'email'=>'alvin@car.com',
              'phone'=>'Alvin Car',
              'city'=>'Alvin Car',
              'state'=>'Alvin Car',
              'country'=>'Yemen',
              'role'=>'admin',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>281,
              'name'=>'renillidae759',
              'avatar'=>'',
              'email'=>'justin@jacquelin.com',
              'phone'=>'Justin Jacquelin',
              'city'=>'Justin Jacquelin',
              'state'=>'Justin Jacquelin',
              'country'=>'Turkmenistan',
              'role'=>'user',
              'status'=>'blocked',
              'is_verified'=>true,
            //   'department'=>'management'
            ],
            [
              'id'=>282,
              'name'=>'jellylike89',
              'avatar'=>'',
              'email'=>'chloe@tague.com',
              'phone'=>'Chloe Tague',
              'city'=>'Chloe Tague',
              'state'=>'Chloe Tague',
              'country'=>'Pakistan',
              'role'=>'staff',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'development'
            ],
            [
              'id'=>283,
              'name'=>'ocular772',
              'avatar'=>'',
              'email'=>'zola@tauarez.com',
              'phone'=>'Zola Tauarez',
              'city'=>'Zola Tauarez',
              'state'=>'Zola Tauarez',
              'country'=>'Dominica',
              'role'=>'admin',
              'status'=>'deactivated',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>284,
              'name'=>'oxgang923',
              'avatar'=>'',
              'email'=>'wm@cieszynski.com',
              'phone'=>'Wm Cieszynski',
              'city'=>'Wm Cieszynski',
              'state'=>'Wm Cieszynski',
              'country'=>'South Korea',
              'role'=>'user',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>285,
              'name'=>'ideationally882',
              'avatar'=>'',
              'email'=>'hope@mobus.com',
              'phone'=>'Hope Mobus',
              'city'=>'Hope Mobus',
              'state'=>'Hope Mobus',
              'country'=>'United States of America',
              'role'=>'user',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>286,
              'name'=>'cynomorphous587',
              'avatar'=>'',
              'email'=>'lee@wernimont.com',
              'phone'=>'Lee Wernimont',
              'city'=>'Lee Wernimont',
              'state'=>'Lee Wernimont',
              'country'=>'South Africa',
              'role'=>'admin',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'development'
            ],
            [
              'id'=>287,
              'name'=>'windtight501',
              'avatar'=>'',
              'email'=>'myesha@denman.com',
              'phone'=>'Myesha Denman',
              'city'=>'Myesha Denman',
              'state'=>'Myesha Denman',
              'country'=>'Cyprus',
              'role'=>'staff',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>288,
              'name'=>'strongylate147',
              'avatar'=>'',
              'email'=>'cornell@roszell.com',
              'phone'=>'Cornell Roszell',
              'city'=>'Cornell Roszell',
              'state'=>'Cornell Roszell',
              'country'=>'Algeria',
              'role'=>'admin',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'development'
            ],
            [
              'id'=>289,
              'name'=>'reblade348',
              'avatar'=>'',
              'email'=>'vernon@ogrodowicz.com',
              'phone'=>'Vernon Ogrodowicz',
              'city'=>'Vernon Ogrodowicz',
              'state'=>'Vernon Ogrodowicz',
              'country'=>'Botswana',
              'role'=>'admin',
              'status'=>'deactivated',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>290,
              'name'=>'trapping909',
              'avatar'=>'',
              'email'=>'rosy@litza.com',
              'phone'=>'Rosy Litza',
              'city'=>'Rosy Litza',
              'state'=>'Rosy Litza',
              'country'=>'Iran',
              'role'=>'staff',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'development'
            ],
            [
              'id'=>291,
              'name'=>'associatedness456',
              'avatar'=>'',
              'email'=>'carl@lano.com',
              'phone'=>'Carl Lano',
              'city'=>'Carl Lano',
              'state'=>'Carl Lano',
              'country'=>'Japan',
              'role'=>'user',
              'status'=>'blocked',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>292,
              'name'=>'deformable333',
              'avatar'=>'',
              'email'=>'jamika@overlee.com',
              'phone'=>'Jamika Overlee',
              'city'=>'Jamika Overlee',
              'state'=>'Jamika Overlee',
              'country'=>'Colombia',
              'role'=>'admin',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>293,
              'name'=>'abaptiston684',
              'avatar'=>'',
              'email'=>'lyle@pytko.com',
              'phone'=>'Lyle Pytko',
              'city'=>'Lyle Pytko',
              'state'=>'Lyle Pytko',
              'country'=>'Somalia',
              'role'=>'user',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'management'
            ],
            [
              'id'=>294,
              'name'=>'neglector719',
              'avatar'=>'',
              'email'=>'latoria@josef.com',
              'phone'=>'Latoria Josef',
              'city'=>'Latoria Josef',
              'state'=>'Latoria Josef',
              'country'=>'Lithuania',
              'role'=>'staff',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'development'
            ],
            [
              'id'=>295,
              'name'=>'perameloid596',
              'avatar'=>'',
              'email'=>'tennille@draft.com',
              'phone'=>'Tennille Draft',
              'city'=>'Tennille Draft',
              'state'=>'Tennille Draft',
              'country'=>'Somalia',
              'role'=>'user',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>296,
              'name'=>'fetoplacental529',
              'avatar'=>'',
              'email'=>'bernadette@ludovici.com',
              'phone'=>'Bernadette Ludovici',
              'city'=>'Bernadette Ludovici',
              'state'=>'Bernadette Ludovici',
              'country'=>'Cameroon',
              'role'=>'user',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'development'
            ],
            [
              'id'=>297,
              'name'=>'interdiffusion271',
              'avatar'=>'',
              'email'=>'mui@melching.com',
              'phone'=>'Mui Melching',
              'city'=>'Mui Melching',
              'state'=>'Mui Melching',
              'country'=>'Iran',
              'role'=>'user',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>298,
              'name'=>'vernacularize342',
              'avatar'=>'',
              'email'=>'mitsue@houlahan.com',
              'phone'=>'Mitsue Houlahan',
              'city'=>'Mitsue Houlahan',
              'state'=>'Mitsue Houlahan',
              'country'=>'Malawi',
              'role'=>'user',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>299,
              'name'=>'sassenach8',
              'avatar'=>'',
              'email'=>'elsa@neubert.com',
              'phone'=>'Elsa Neubert',
              'city'=>'Elsa Neubert',
              'state'=>'Elsa Neubert',
              'country'=>'Togo',
              'role'=>'staff',
              'status'=>'deactivated',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>300,
              'name'=>'diplantidian91',
              'avatar'=>'',
              'email'=>'kandice@mizelle.com',
              'phone'=>'Kandice Mizelle',
              'city'=>'Kandice Mizelle',
              'state'=>'Kandice Mizelle',
              'country'=>'Greece',
              'role'=>'user',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>301,
              'name'=>'precognizant796',
              'avatar'=>'',
              'email'=>'damian@hayzlett.com',
              'phone'=>'Damian Hayzlett',
              'city'=>'Damian Hayzlett',
              'state'=>'Damian Hayzlett',
              'country'=>'St. Lucia',
              'role'=>'staff',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'management'
            ],
            [
              'id'=>302,
              'name'=>'submaster902',
              'avatar'=>'',
              'email'=>'aundrea@stempel.com',
              'phone'=>'Aundrea Stempel',
              'city'=>'Aundrea Stempel',
              'state'=>'Aundrea Stempel',
              'country'=>'Cyprus',
              'role'=>'user',
              'status'=>'blocked',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>303,
              'name'=>'ladytide97',
              'avatar'=>'',
              'email'=>'shiloh@spielmaker.com',
              'phone'=>'Shiloh Spielmaker',
              'city'=>'Shiloh Spielmaker',
              'state'=>'Shiloh Spielmaker',
              'country'=>'Palestine',
              'role'=>'user',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'development'
            ],
            [
              'id'=>304,
              'name'=>'prayingly678',
              'avatar'=>'',
              'email'=>'terese@dyreson.com',
              'phone'=>'Terese Dyreson',
              'city'=>'Terese Dyreson',
              'state'=>'Terese Dyreson',
              'country'=>'Sao Tome and Principe',
              'role'=>'user',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'management'
            ],
            [
              'id'=>305,
              'name'=>'unclotted302',
              'avatar'=>'',
              'email'=>'vashti@kilton.com',
              'phone'=>'Vashti Kilton',
              'city'=>'Vashti Kilton',
              'state'=>'Vashti Kilton',
              'country'=>'Portugal',
              'role'=>'user',
              'status'=>'deactivated',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>306,
              'name'=>'unfascinating985',
              'avatar'=>'',
              'email'=>'carter@mendes.com',
              'phone'=>'Carter Mendes',
              'city'=>'Carter Mendes',
              'state'=>'Carter Mendes',
              'country'=>'Armenia',
              'role'=>'user',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>307,
              'name'=>'gardenwise712',
              'avatar'=>'',
              'email'=>'helene@madden.com',
              'phone'=>'Helene Madden',
              'city'=>'Helene Madden',
              'state'=>'Helene Madden',
              'country'=>'Finland',
              'role'=>'staff',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'development'
            ],
            [
              'id'=>308,
              'name'=>'interagree870',
              'avatar'=>'',
              'email'=>'ashton@calderone.com',
              'phone'=>'Ashton Calderone',
              'city'=>'Ashton Calderone',
              'state'=>'Ashton Calderone',
              'country'=>'Italy',
              'role'=>'user',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>309,
              'name'=>'brutification848',
              'avatar'=>'',
              'email'=>'robert@lyster.com',
              'phone'=>'Robert Lyster',
              'city'=>'Robert Lyster',
              'state'=>'Robert Lyster',
              'country'=>'Turkey',
              'role'=>'user',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>310,
              'name'=>'unhypocritically536',
              'avatar'=>'',
              'email'=>'delma@mewbourn.com',
              'phone'=>'Delma Mewbourn',
              'city'=>'Delma Mewbourn',
              'state'=>'Delma Mewbourn',
              'country'=>'Honduras',
              'role'=>'staff',
              'status'=>'deactivated',
              'is_verified'=>false,
            //   'department'=>'development'
            ],
            [
              'id'=>311,
              'name'=>'tarentine951',
              'avatar'=>'',
              'email'=>'ja@alaibilla.com',
              'phone'=>'Ja Alaibilla',
              'city'=>'Ja Alaibilla',
              'state'=>'Ja Alaibilla',
              'country'=>'Italy',
              'role'=>'user',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>312,
              'name'=>'mountainlike2',
              'avatar'=>'',
              'email'=>'delinda@rosentrance.com',
              'phone'=>'Delinda Rosentrance',
              'city'=>'Delinda Rosentrance',
              'state'=>'Delinda Rosentrance',
              'country'=>'Guinea',
              'role'=>'user',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'development'
            ],
            [
              'id'=>313,
              'name'=>'zoetic150',
              'avatar'=>'',
              'email'=>'danae@demeter.com',
              'phone'=>'Danae Demeter',
              'city'=>'Danae Demeter',
              'state'=>'Danae Demeter',
              'country'=>'Gambia',
              'role'=>'user',
              'status'=>'deactivated',
              'is_verified'=>true,
            //   'department'=>'sales'
            ],
            [
              'id'=>314,
              'name'=>'addlepate37',
              'avatar'=>'',
              'email'=>'kattie@joffrion.com',
              'phone'=>'Kattie Joffrion',
              'city'=>'Kattie Joffrion',
              'state'=>'Kattie Joffrion',
              'country'=>'Albania',
              'role'=>'user',
              'status'=>'blocked',
              'is_verified'=>true,
            //   'department'=>'management'
            ],
            [
              'id'=>315,
              'name'=>'pollinate51',
              'avatar'=>'',
              'email'=>'in@stjohns.com',
              'phone'=>'In Stjohns',
              'city'=>'In Stjohns',
              'state'=>'In Stjohns',
              'country'=>'North Korea',
              'role'=>'user',
              'status'=>'active',
              'is_verified'=>false,
            //   'department'=>'sales'
            ],
            [
              'id'=>316,
              'name'=>'tournefortian626',
              'avatar'=>'',
              'email'=>'van@laferney.com',
              'phone'=>'Van Laferney',
              'city'=>'Van Laferney',
              'state'=>'Van Laferney',
              'country'=>'Finland',
              'role'=>'staff',
              'status'=>'active',
              'is_verified'=>true,
            //   'department'=>'development'
            ],
            [
              'id'=>317,
              'name'=>'aspersively497hghf',
              'avatar'=>'',
              'email'=>'sylvia@maharrey.com',
              'phone'=>'Sylvia Maharrey',
              'city'=>'Sylvia Maharrey',
              'state'=>'Sylvia Maharrey',
              'country'=>'Turkmenistan',
              'role'=>'staff',
              'status'=>'deactivated',
              'is_verified'=>true,
            //   'department'=>'sales'
            ]
        
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return [
            'id'=>268,
            'name'=>'adoptionism744',
            'avatar'=>'',
            'email'=>'angelo@sashington.com',
            'phone'=>'Angelo Sashington',
            'city'=>'Angelo Sashington',
            'state'=>'Angelo Sashington',
            'country'=>'Bolivia',
            'dob'=>'28 January 1998',
            'gender'=>'male',
            'role'=>'admin',
            'status'=>'active',
            'is_verified'=>true,
          //   'department'=>'sales',
          //   'company'=>'WinDon Technologies Pvt Ltd',
            'mobile'=>'+65958951757',
          //   'website'=>'https://rowboat.com/insititious/Angelo',
          //   'languages_known'=>['English', 'Arabic'],
          //   'contact_options'=>['email', 'message', 'phone'],
          //   'location'=>[
          //     'add_line_1'=>'A-65, Belvedere Streets',
          //     'add_line_2'=>'',
          //     'post_code'=>'1868',
          //     'city'=>'New York',
          //     'state'=>'New York',
          //     'country'=>'United States'
          //   ],
          //   'social_links'=>[
          //     'twitter'=>'https://twitter.com/adoptionism744',
          //     'facebook'=>'https://www.facebook.com/adoptionism664',
          //     'instagram'=>'https://www.instagram.com/adopt-ionism744/',
          //     'github'=>'https://github.com/madop818',
          //     'codepen'=>'https://codepen.io/adoptism243',
          //     'slack'=>'@adoptionism744'
          //   ],
            'permissions'=>[
              'users'=>[
                'read'=>true,
                'write'=>false,
                'create'=>false,
                'delete'=>false
              ],
              'posts'=>[
                'read'=>true,
                'write'=>true,
                'create'=>true,
                'delete'=>true
              ],
              'comments'=>[
                'read'=>true,
                'write'=>false,
                'create'=>true,
                'delete'=>false
              ]
      
            ]
        ];      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
