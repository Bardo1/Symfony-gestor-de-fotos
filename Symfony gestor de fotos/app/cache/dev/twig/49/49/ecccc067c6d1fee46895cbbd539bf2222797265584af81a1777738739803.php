<?php

/* walterpruebaBundle:Default:add.html.twig */
class __TwigTemplate_4949ecccc067c6d1fee46895cbbd539bf2222797265584af81a1777738739803 extends Twig_Template
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
        echo "<h1>Agregar foto add1</h1>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "

    <p>Nombre:";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombre", array()), 'widget');
        echo "</p>

    <p>precio:";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "precio", array()), 'widget');
        echo "</p>

    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "walterpruebaBundle:Default:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  60 => 18,  55 => 16,  50 => 14,  39 => 5,  36 => 4,  11 => 1,);
    }
}
