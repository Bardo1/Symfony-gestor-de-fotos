<?php

/* walterpruebaBundle:Default:show.html.twig */
class __TwigTemplate_f65b729a9e5eefb022a42e133a80852b5d9104884ae2f978adde38e94f419c3b extends Twig_Template
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
        echo "<h1>SHOW SHOW SHOW SHOW SHOW</h1>
    <table>
        <tr>
            <td align=\"center\" valign=\"top\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("upload/" . $this->getAttribute($this->getContext($context, "entity"), "id", array())) . "/") . $this->getAttribute($this->getContext($context, "entity"), "image", array()))), "html", null, true);
        echo "\" alt=\"\" width=\"751\" height=\"337\" /></td>
        </tr>
    </table>
";
    }

    public function getTemplateName()
    {
        return "walterpruebaBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  39 => 5,  36 => 4,  11 => 1,);
    }
}
