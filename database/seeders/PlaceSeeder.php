<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0 ; $i< 10 ;$i++) {
            DB::table('member_places')->insert([
                'place_name' => Str::random(10),
                'place_detail' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A quo temporibus nobis aut, rem dicta unde itaque suscipit voluptatibus repellendus quaerat omnis. Placeat labore debitis, ratione nemo consequatur nobis non, quas itaque hic quis atque obcaecati accusamus impedit beatae corporis dolorum assumenda! Quasi sunt id quod labore nihil nobis voluptas quo cumque ipsum minima beatae fuga nulla et eius culpa esse dolore, odit dicta nemo assumenda. Dolore dolores aut ducimus voluptates nulla consectetur, eius consequuntur voluptatum, ea corrupti rerum explicabo repellat dolor reiciendis pariatur id atque? Optio sed inventore enim et maxime. Numquam, inventore deserunt? Itaque id iste reprehenderit laudantium deserunt? Sit soluta eveniet repellendus commodi illum. Consectetur, harum quam error iure dolorum cumque qui eum quasi laborum animi ut. Eligendi veritatis iure, ut laboriosam fugiat explicabo, fugit error voluptas nemo ratione, esse aliquid. Odio deserunt maxime eligendi magnam accusamus ratione nobis voluptatum laboriosam laudantium? Tempore eum reiciendis, est explicabo sunt nemo sequi aut saepe pariatur suscipit, voluptatibus harum. Architecto eveniet eaque praesentium quisquam autem nemo obcaecati magni, nam quo expedita dolore exercitationem et sequi ducimus culpa impedit soluta! Exercitationem tempore reiciendis soluta a! Fugit expedita totam tempora perferendis numquam nam fuga doloribus, vel recusandae ad quam nemo! Ratione labore nostrum facilis corporis quia eaque repudiandae, excepturi odio sit quis earum dolorem inventore, incidunt temporibus voluptate delectus facere. Quas quos modi dolorum maiores dignissimos tempore, quo fugiat harum autem ratione mollitia porro vitae voluptatibus esse sed et voluptate qui hic sapiente quis necessitatibus, minus vel earum eaque? Assumenda, provident minus?',
                'place_type' => Str::random(10),
                'img_path' => 'no_photo',
                'map_url' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3856.553084875045!2d102.07246331535323!3d14.850319974888103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3119532a596fb995%3A0x8297d909b5c21505!2z4Liq4Lin4LiZ4Liq4Lix4LiV4Lin4LmM4LiZ4LiE4Lij4Lij4Liy4LiK4Liq4Li14Lih4Liy!5e0!3m2!1sth!2sth!4v1608184039421!5m2!1sth!2sth" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
                'username' => Str::random(10)
            ]);
        }
        
    }
}




