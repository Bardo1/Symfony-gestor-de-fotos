<?php

/* walterpruebaBundle:Default:entradadesplegada.html.twig */
class __TwigTemplate_63ad24e4e96d76931266d6bdbfb5fffb7163b4c7077e0cbf892f2b9b00144655 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("walterpruebaBundle::main.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "walterpruebaBundle::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <br> </br>
    <br> </br>
    <br> </br>

<div class=\"container\">

    <p style=\"color: #FFFFFF\"></p>

                <div class=\"col-xs-6\">
                  <div class=\"panel panel-default\">
                   <div class=\"panel-body\" style=\"background-color:#CBC9FF;\">
                   <div align=\"right\" id=\"share-buttons\">
                   <a href=\"http://www.facebook.com/sharer.php?u=http://www.bardo1.com/symfony/web/app_dev.php/entradadesple/";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fotos"), "id", array()), "html", null, true);
        echo "\" target=\"_blank\"><img width='20' height='20' src=\"http://www.simplesharebuttons.com/images/somacro/facebook.png\" alt=\"Facebook\" /></a>
                   <a href=\"http://twitter.com/share?url=http://www.bardo1.com/symfony/web/app_dev.php/entradadesple/";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fotos"), "id", array()), "html", null, true);
        echo "&text=Me ha gustado esta publicacion &hashtags=letmeprovsomething\" target=\"_blank\"><img width='20' height='20'  src=\"http://www.simplesharebuttons.com/images/somacro/twitter.png\" alt=\"Twitter\" /></a>
                   <a href=\"https://plus.google.com/share?url=http://www.bardo1.com/symfony/web/app_dev.php/entradadesple/";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fotos"), "id", array()), "html", null, true);
        echo "\" target=\"_blank\"><img width='20' height='20'  src=\"http://www.simplesharebuttons.com/images/somacro/google.png\" alt=\"Google\" /></a>
                   <a href=\"mailto:?Subject=Simple Share Buttons&Body=I%20saw%20this%20and%20thought%20of%20you!%20 http://www.bardo1.com/symfony/web/app_dev.php/entradadesple/";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fotos"), "id", array()), "html", null, true);
        echo "\"><img width='20' height='20'  src=\"http://www.simplesharebuttons.com/images/somacro/email.png\" alt=\"Email\" /></a>
                                            </div>
                                            <div>
                                                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fotos"), "id", array()), "html", null, true);
        echo "</td>
                                            </div>
                                            <div class=\"\">
                                                <a href=\"#\" class=\"thumbnail\">
                                                    <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("upload/" . $this->getAttribute($this->getContext($context, "fotos"), "id", array())) . "/") . $this->getAttribute($this->getContext($context, "fotos"), "image", array()))), "html", null, true);
        echo "\"  width=\"751\" height=\"337\" alt=\"a\" />
                                                </a>
                                            </div>
                                            <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fotos"), "id", array()), "html", null, true);
        echo "</td>
                                        </div>
                                    </div>
                                </div>
                 </div>
         </div>

    <div class=\"col-md-7\">
        <div class=\"panel panel-default\">
            <div class=\"panel-body\" style=\"background-color:#CBC9FF;\">
                <div class=\"fb-comments\" data-href=\"http://developers.facebook.com/docs/plugins/comments/bardocomentarios";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fotos"), "id", array()), "html", null, true);
        echo "\" data-numposts=\"5\" data-colorscheme=\"light\"></div>

                <div id=\"fb-root\"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = \"//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0\";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
            </div>
        </div>
    </div>
    <!-- customize labels of htmlcommentbox.com -->
    <script>
        // This code goes ABOVE the main HTML Comment Box code!
        // replace the text in the single quotes below to customize labels.
        hcb_user = {
            // L10N
            comments_header : 'Comments',
            name_label : 'Name',
            content_label: 'Enter your comment here',
            submit : 'Comment',
            logout_link : '<img title=\"log out\" src=\"//www.htmlcommentbox.com/static/images/door_out.png\" alt=\"[logout]\" class=\"hcb-icon\"/>',
            admin_link : '<img src=\"//www.htmlcommentbox.com/static/images/door_in.png\" alt=\"[login]\" class=\"hcb-icon\"/>',
            no_comments_msg: 'No one has commented yet. Be the first!',
            add:'Add your comment',
            again: 'Post another comment',
            rss:'<img src=\"//www.htmlcommentbox.com/static/images/feed.png\" class=\"hcb-icon\" alt=\"rss\"/> ',
            said:'said:',
            prev_page:'<img src=\"//www.htmlcommentbox.com/static/images/arrow_left.png\" class=\"hcb-icon\" title=\"previous page\" alt=\"[prev]\"/>',
            next_page:'<img src=\"//www.htmlcommentbox.com/static/images/arrow_right.png\" class=\"hcb-icon\" title=\"next page\" alt=\"[next]\"/>',
            showing:'Showing',
            to:'to',
            website_label:'website (optional)',
            email_label:'email',
            anonymous:'Anonymous',
            mod_label:'(mod)',
            subscribe:'email me replies',
            are_you_sure:'Do you want to flag this comment as inappropriate?',

            reply:'<img src=\"//www.htmlcommentbox.com/static/images/reply.png\"/> reply',
            flag:'<img src=\"//www.htmlcommentbox.com/static/images/flag.png\"/> flag',
            like:'<img src=\"//www.htmlcommentbox.com/static/images/like.png\"/> like',

            //dates
            days_ago:'days ago',
            hours_ago:'hours ago',
            minutes_ago:'minutes ago',
            within_the_last_minute:'within the last minute',

            msg_thankyou:'Thank you for commenting!',
            msg_approval:'(this comment is not published until approved)',
            msg_approval_required:'Thank you for commenting! Your comment will appear once approved by a moderator.',

            err_bad_html:'Your comment contained bad html.',
            err_bad_email:'Please enter a valid email address.',
            err_too_frequent:'You must wait a few seconds between posting comments.',
            err_comment_empty:'Your comment was not posted because it was empty!',
            err_denied:'Your comment was not accepted.',

            //SETTINGS
            MAX_CHARS: 2048,
            PAGE:'', // ID of the webpage to show comments for. defaults to the webpage the user is currently visiting.
            RELATIVE_DATES:true // show dates in the form \"X hours ago.\" etc.
        };
    </script>
    <!-- done customizing labels of htmlcommentbox.com -->





</div><!-- /container -->

</div>


<br> </br>
</div>
</div>
</div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "walterpruebaBundle:Default:entradadesplegada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 39,  84 => 29,  78 => 26,  71 => 22,  65 => 19,  61 => 18,  57 => 17,  53 => 16,  39 => 4,  36 => 3,  11 => 1,);
    }
}
