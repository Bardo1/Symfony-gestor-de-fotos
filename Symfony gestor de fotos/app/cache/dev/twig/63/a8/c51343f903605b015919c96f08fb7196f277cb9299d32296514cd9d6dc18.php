<?php

/* walterpruebaBundle::main.html.twig */
class __TwigTemplate_63a8c51343f903605b015919c96f08fb7196f277cb9299d32296514cd9d6dc18 extends Twig_Template
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
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Vista desde Main";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <div id=\"contenido\">
        ";
        // line 8
        $this->displayBlock('contenido', $context, $blocks);
        // line 11
        echo "    </div>


";
    }

    // line 8
    public function block_contenido($context, array $blocks = array())
    {
        // line 9
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "walterpruebaBundle::main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  60 => 8,  53 => 11,  51 => 8,  47 => 6,  44 => 5,  38 => 3,  11 => 1,);
    }
}
