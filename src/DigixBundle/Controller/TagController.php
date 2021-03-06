<?php

namespace DigixBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;

use DigixBundle\Entity\TagDB;

class TagController extends Controller{

     public function tagAction(Request $request){
     	$session=$this->getRequest()->getSession();

        $userId=$session->get('userId');

        $photos=array();
        $photos=$session->get('photos');
        $videos=$session->get('videos');

        $tagObject = new TagDB();
        
        for($i='0';$i<(string)count($photos);$i++){
            $tag=$request->request->get('photo'.$i);
            if($tag){
                $em = $this->getDoctrine()->getManager(); 

                $tagObject->setTagList($tag);
                $tagObject->setUrl($photos[(int)$i]);
                $tagObject->setType('photo');
                $tagObject->setUserId($userId);
                $tagObject->setCreated('03 06 2015');
                
                $em->persist($tagObject);
                
                $em->flush();
                $em->clear();
            }
        }

        for($i='0';$i<(string)count($videos);$i++){
            $tag=$request->request->get('video'.$i);
            if($tag){
                $em = $this->getDoctrine()->getManager(); 

                $tagObject->setTagList($tag);
                $tagObject->setUrl($videos[(int)$i]);
                $tagObject->setType('video');

                $em->persist($tagObject);
                $em->flush();
                $em->clear();
            }
        }
        
        return $this->redirectToRoute('digix_wall'); 
       
     }
}