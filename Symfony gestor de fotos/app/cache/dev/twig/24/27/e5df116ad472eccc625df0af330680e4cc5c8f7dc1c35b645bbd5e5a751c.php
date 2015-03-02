<?php

/* walterpruebaBundle:Default:new.html.twig */
class __TwigTemplate_2427e5df116ad472eccc625df0af330680e4cc5c8f7dc1c35b645bbd5e5a751c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    <br> </br>
    <br> </br>
    <br> </br>


            <div class=\"container\">
                <br> </br>
                <!--left-->
                <div class=\"row\">
                    <div class=\"col-xs-3 \">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                <!-- Left -->
                                <legend>Panel de Administrador</legend>
                                <hr>
                                <ul class=\"nav nav-pills nav-stacked\">
                                    <li class=\"nav-header\"></li>
                                    <li class=\"active\"><a href=\"\" title=\"Bootstrap 3 ListGroup\">Probando</a></li>

                                </ul>
                            </div><!-- /span-3 -->
                        </div>
                    </div>
                    <div class=\"row\">

                        <div class=\"col-md-8\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-body\">

                                    <form action=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("walterprueba_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
                                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
                                        <p>
                                            <button class=\"btn btn-primary\" type=\"submit\">Create</button>
                                        </p>
                                    </form>

                                </div><!--/center-->
                            </div>
                        </div>
                    </div>
                </div><!-- /container -->
            </div>
            <!-- Main -->
            <br> </br>
            </div>

    





";
    }

    public function getTemplateName()
    {
        return "walterpruebaBundle:Default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 36,  71 => 35,  39 => 5,  36 => 4,  11 => 1,);
    }
}
