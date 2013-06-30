<article class="single">
    <div class="row">
        <div class="one-quarter meta">
            <div class="thumbnail">
                <img src="<?php echo $post_image ?>" alt="<?php echo $post_title ?>" />
            </div>

            <ul>
                <li>Written by <?php echo $post_author ?></li>
                <li><?php echo $published_date ?></li>
                <li>About <a href="<?php echo $blog_url.'/category/'.urlencode(trim(strtolower($post_category))); ?>"><?php echo $post_category ?></a></li>
                <li></li>
            </ul>
        </div>

        <div class="three-quarters post">
            <?php echo $post ?>
            
            <?php if (file_exists($image)) : ?>
            <div style="margin-top:2em">
                <figure>
                    <img src="<?php echo $post_image ?>" alt="<?php echo $post_title ?>" />
                </figure>
            </div>
            <?php elseif($pic): ?>
            <div style="margin-top:2em">
                <figure>
                    <img src="<?php echo POSTS_DIR.$pic ?>" alt="<?php echo $post_title ?>" />
                </figure>
            </div>
            <?php endif ?>

            <ul class="actions">
                <li><a class="button" href="https://twitter.com/intent/tweet?screen_name=<?php echo $post_author_twitter ?>&text=Re:%20<?php echo $post_link ?>%20" data-dnt="true">Comment on Twitter</a></li>
                <li><a class="button" href="https://twitter.com/intent/tweet?text=&quot;<?php echo $post_title ?>&quot;%20<?php echo $post_link ?>%20via%20&#64;<?php echo $post_author_twitter ?>" data-dnt="true">Share on Twitter</a></li>
                <li><a class="button" href="<?php echo $blog_url ?>">More Articles</a></li>
            </ul>

            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
    </div>
</article>
