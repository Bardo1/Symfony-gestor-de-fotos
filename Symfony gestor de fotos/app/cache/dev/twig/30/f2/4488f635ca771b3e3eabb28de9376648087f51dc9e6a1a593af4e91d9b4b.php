<?php

/* walterpruebaBundle:Default:entradas.html.twig */
class __TwigTemplate_30f24488f635ca771b3e3eabb28de9376648087f51dc9e6a1a593af4e91d9b4b extends Twig_Template
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
        echo "<!-- Main -->
    <br> </br>
    <br> </br>
    <br> </br>
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["fotos"]);
        foreach ($context['_seq'] as $context["_key"] => $context["fotos"]) {
            // line 9
            echo "    <div class=\"container\">
        <!-- Columns are always 50% wide, on mobile and desktop -->

        <div class=\"col-xs-6\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\" style=\"background-color:#CBC9FF;\">
                    <div align=\"right\" id=\"share-buttons\">
                        <a href=\"http://www.facebook.com/sharer.php?u=http://www.bardo1.com/empleos1/web/index_dev.php/entradadesplegada/";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["fotos"], "id", array()), "html", null, true);
            echo "\" target=\"_blank\"><img width='20' height='20' src=\"http://www.simplesharebuttons.com/images/somacro/facebook.png\" alt=\"Facebook\" /></a>
                        <a href=\"http://twitter.com/share?url=http://www.bardo1.com/empleos1/web/index_dev.php/entradadesplegada/";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["fotos"], "id", array()), "html", null, true);
            echo "&text=me ha gustado esta imagen @bardo__&hashtags=#bardo\" target=\"_blank\"><img width='20' height='20'  src=\"http://www.simplesharebuttons.com/images/somacro/twitter.png\" alt=\"Twitter\" /></a>
                        <a href=\"https://plus.google.com/share?url=http://www.bardo1.com/empleos1/web/index_dev.php/entradadesplegada/";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["fotos"], "id", array()), "html", null, true);
            echo "\" target=\"_blank\"><img width='20' height='20'  src=\"http://www.simplesharebuttons.com/images/somacro/google.png\" alt=\"Google\" /></a>
                        <a href=\"mailto:?Subject=Simple Share Buttons&Body=I%20saw%20this%20and%20thought%20of%20you!%20 http://www.bardo1.com/empleos1/web/index_dev.php/entradadesplegada/";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["fotos"], "id", array()), "html", null, true);
            echo "\"><img width='20' height='20'  src=\"http://www.simplesharebuttons.com/images/somacro/email.png\" alt=\"Email\" /></a>
                    </div>
                    <div>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["fotos"], "id", array()), "html", null, true);
            echo "</td>
                    </div>
                    <div class=\"\">

                        <a class=\"thumbnail\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("walterprueba_entradadesple", array("id" => $this->getAttribute($context["fotos"], "id", array()))), "html", null, true);
            echo "\" title=\"Boo\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("upload/" . $this->getAttribute($context["fotos"], "id", array())) . "/") . $this->getAttribute($context["fotos"], "image", array()))), "html", null, true);
            echo "\"  width=\"751\" height=\"337\" alt=\"a\"/> </a>
                    </div>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["fotos"], "id", array()), "html", null, true);
            echo "</td>
                </div>
            </div>
        </div>
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fotos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "

";
    }

    public function getTemplateName()
    {
        return "walterpruebaBundle:Default:entradas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 35,  90 => 28,  83 => 26,  76 => 22,  70 => 19,  66 => 18,  62 => 17,  58 => 16,  49 => 9,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
