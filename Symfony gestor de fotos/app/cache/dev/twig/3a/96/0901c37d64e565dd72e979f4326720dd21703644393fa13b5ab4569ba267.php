<?php

/* walterpruebaBundle:Default:add2.html.twig */
class __TwigTemplate_3a960901c37d64e565dd72e979f4326720dd21703644393fa13b5ab4569ba267 extends Twig_Template
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
        echo "<h1>Agregar foto add2</h1>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "

    <p>Nombre:";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombre", array()), 'widget');
        echo "</p>

    <p>precio:";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "precio", array()), 'widget');
        echo "</p>

    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "walterpruebaBundle:Default:add2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 18,  58 => 16,  53 => 14,  48 => 12,  39 => 5,  36 => 4,  11 => 1,);
    }
}
