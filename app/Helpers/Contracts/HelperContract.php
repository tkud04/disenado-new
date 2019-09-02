<?php
namespace App\Helpers\Contracts;

Interface HelperContract
{
        public function sendEmail($to,$subject,$data,$view,$type);
        public function getProjects();
        public function getChunk($data,$c);
}
 ?>