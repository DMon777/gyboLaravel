<?php
/**
 * Created by PhpStorm.
 * User: Димон
 * Date: 13.12.2017
 * Time: 13:18
 */

namespace App\Repositories;



class Comments
{

    public function printComments($map)
    {
        if(!empty($map)) {
            foreach($map as $comment) { ?>
                <div class="comment reply-comment wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="author-thumb"><img src="<?= asset('assets/images/resource/default_avatar.jpg') ?>" alt="avatar"></div>
                    <input type="hidden" name="comment_id" class="input_comment_id" value="<?=$comment->id?>">
                    <input type="hidden" name="commentator_name" class="commentator_name" value="<?=$comment->login;?>">
                    <div class="comment-info"><strong class = "commentator_name"><?= $comment->login ?></strong> <?= $comment->created_at ?></div>
<!--                    <div class="comment-info commentator-name"> --><?//=$comment->login?><!--  <strong> --><?//= $comment->created_at ?><!-- </strong> </div>-->
                    <div class="text"><?= $comment->comment ?></div>
                    <a href="#" class="theme-btn dark-btn reply-btn"><span class="icon flaticon-update23"></span>&ensp; Reply</a>
                    <? $this->printComments($comment->children) ?>
                </div>
            <?php }
        }
        else return false;
    }

}