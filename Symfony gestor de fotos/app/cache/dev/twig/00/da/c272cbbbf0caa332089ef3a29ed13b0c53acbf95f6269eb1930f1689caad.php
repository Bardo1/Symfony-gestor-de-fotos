<?php

/* ::base.html.twig */
class __TwigTemplate_00dac272cbbbf0caa332089ef3a29ed13b0c53acbf95f6269eb1930f1689caad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" xmlns=\"http://www.w3.org/1999/html\">
<head>
    <meta charset=\"utf-8\">

    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Walter Muñoz\">
    <meta name=\"description\" content=\"Desarrollo de Sistemas, sitios web, consultorias, Tecnologias, php, java, Silex, Symfony, bootstrap, ingenieria de software\">
    <title>Bardo - Desarrollo de sistemas</title>
    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/agency2.css\" rel=\"stylesheet\">
    <!-- Custom CSS -->

    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/scrolling-nav.css\" rel=\"stylesheet\">
    <!-- Custom Fonts -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "basepath", array()), "html", null, true);
        echo "/font-awesome-4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "basepath", array()), "html", null, true);
        echo "/http://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "basepath", array()), "html", null, true);
        echo "/http://fonts.googleapis.com/css?family=Kaushan+Script\" rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "basepath", array()), "html", null, true);
        echo "/http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic\" rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "basepath", array()), "html", null, true);
        echo "/http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet\" type='text/css'>
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "basepath", array()), "html", null, true);
        echo "http://fonts.googleapis.com/css?family=Akronim\" rel=\"stylesheet\" type=\"text/css\">

    <style type=\"text/css\">

        body
        {
            background-repeat: no-repeat;
            background-attachment: fixed
        }
    </style>
</head>

<!-- Navigation -->
<nav class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand page-scroll\" href=\"#page-top\">Bardo</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"hidden\">
                    <a href=\"#page-top\"></a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"http://www.bardo1.com\">Desarrollo de software</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"\">Fotos</a>
                </li>
                <li>
                    <div class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav\">

                            ";
        // line 64
        if ((null === $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session", array()), "get", array(0 => "user"), "method"))) {
            // line 65
            echo "                                <li class=\"dropdown\" id=\"menuLogin\">
                                    <a class=\"glyphicon glyphicon-log-in\"  class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"navLogin\" > Login </a>
                                    <div class=\"dropdown-menu\" style=\"padding:17px;\">
                                        <form  id=\"form2\" name=\"form2\" action=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("_welcome");
            echo "\" method=\"post\">
                                            <fieldset>
                                                <input name=\"username\" id=\"username\" type=\"text\" placeholder=\"Correo electronico\">
                                                <input name=\"password\" id=\"password\" type=\"password\" placeholder=\"Password\"><br>
                                                <button   type=\"submit\" name=\"login\" id=\"login\" value=\"login\" class=\"btn btn-primary\" class=\"glyphicon glyphicon-log-in\" > Iniciar Sesion</button>
                                                <a href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("_welcome");
            echo "\">Registrarse</a><br>
                                                <a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("_welcome");
            echo "\">Olvido Contraseña?</a><br>
                                            </fieldset>
                                        </form>
                                    </div>
                                </li>
                            ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 79
$this->getContext($context, "app"), "session", array()), "get", array(0 => "user"), "method"), "username", array()) == "admin")) {
            // line 80
            echo "                                <li class=\"dropdown\" id=\"menuLogin\">

                                    <a class=\"glyphicon glyphicon-user\" class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"navLogin\"> ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session", array()), "get", array(0 => "user"), "method"), "username", array()), "html", null, true);
            echo "</a>
                                    <div class=\"dropdown-menu\" style=\"padding:17px;\">
                                        <form  id=\"form3\" name=\"form3\" action=\"";
            // line 84
            echo $this->env->getExtension('routing')->getPath("_welcome");
            echo "\" method=\"post\">
                                            <div>
                                                <button type=\"submit\" name=\"loginout\"  id=\"loginout\" value=\"entrada\" class=\"btn btn-primary\"  href=\"";
            // line 86
            echo $this->env->getExtension('routing')->getPath("_welcome");
            echo "\">Perfil de Administrador</button>
                                            </div>
                                        </form>
                                        <br>
                                        <form  id=\"form3\" name=\"form3\" action=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("_welcome");
            echo "\" method=\"post\">
                                            <div>
                                                <button type=\"submit\" name=\"loginout\" id=\"loginout\" value=\"loginout\" class=\"btn btn-danger\">Cerrar sesion</button>
                                            </div>
                                        </form>
                                    </div>
                                </li>

                            ";
        } else {
            // line 99
            echo "                                <li class=\"dropdown\" id=\"menuLogin\">
                                    <a class=\"glyphicon glyphicon-user\" class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"navLogin\"> ";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session", array()), "get", array(0 => "user"), "method"), "username", array()), "html", null, true);
            echo "</a>
                                    <div class=\"dropdown-menu\" style=\"padding:17px;\">

                                        <form  id=\"form3\" name=\"form3\" action=\"";
            // line 103
            echo $this->env->getExtension('routing')->getPath("_welcome");
            echo "\" method=\"post\">
                                            <div>
                                                <button type=\"submit\" name=\"loginout\" id=\"loginout\" value=\"entrada\" class=\"btn btn-primary\">Perfil de usuario</button>
                                            </div>
                                        </form>
                                        <br>
                                        <form  id=\"form3\" name=\"form3\" action=\"";
            // line 109
            echo $this->env->getExtension('routing')->getPath("_welcome");
            echo "\" method=\"post\">
                                            <div>
                                                <button type=\"submit\" name=\"loginout\" id=\"loginout\" value=\"loginout\" class=\"btn btn-danger\">Cerrar sesion</button>
                                            </div>

                                        </form>
                                    </div>
                                </li>
                            ";
        }
        // line 118
        echo "                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Header -->
<header>
    <div class=\"container\">
    </div>
</header>



<body id=\"page-top\" class=\"index\" background=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "basepath", array()), "html", null, true);
        echo "/images/16.jpg\" >
<div class=\"container\">

    ";
        // line 136
        $this->displayBlock('body', $context, $blocks);
        // line 137
        echo "
    <hr>
</div>
</body>

    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <span class=\"copyright\">Copyright &copy;Bardo</span>
                </div>
                <div class=\"col-md-4\">
                    <ul class=\"list-inline social-buttons\">
                        <li><a href=\"https://twitter.com/Bardo__\"><i class=\"fa fa-twitter\"></i></a>
                        </li>
                        <li><a href=\"https://www.facebook.com/walter.r.zamorano\"><i class=\"fa fa-facebook\"></i></a>
                        </li>
                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-4\">
                    <ul class=\"list-inline quicklinks\">
                        <li><a href=\"#\">Privacy Policy</a>
                        </li>
                        <li><a href=\"#\">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "basepath", array()), "html", null, true);
        echo "/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "basepath", array()), "html", null, true);
        echo "/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <!-- jQuery -->
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "basepath", array()), "html", null, true);
        echo "/js/jquery.js\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "basepath", array()), "html", null, true);
        echo "/js/jquery-1.11.0.min.js\"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "basepath", array()), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
    <!-- Plugin JavaScript -->
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "basepath", array()), "html", null, true);
        echo "/http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "basepath", array()), "html", null, true);
        echo "/js/classie.js\"></script>
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "basepath", array()), "html", null, true);
        echo "/js/cbpAnimatedHeader.js\"></script>
    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "basepath", array()), "html", null, true);
        echo "/js/agency.js\"></script>
    <!-- Scrolling Nav JavaScript -->
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "basepath", array()), "html", null, true);
        echo "/js/jquery.easing.min.js\"></script>
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request", array()), "basepath", array()), "html", null, true);
        echo "/js/scrolling-nav.js\"></script>


</html>
";
    }

    // line 136
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 136,  311 => 187,  307 => 186,  302 => 184,  297 => 182,  293 => 181,  289 => 180,  284 => 178,  279 => 176,  275 => 175,  270 => 173,  266 => 172,  229 => 137,  227 => 136,  221 => 133,  204 => 118,  192 => 109,  183 => 103,  177 => 100,  174 => 99,  162 => 90,  155 => 86,  150 => 84,  145 => 82,  141 => 80,  139 => 79,  131 => 74,  127 => 73,  119 => 68,  114 => 65,  112 => 64,  68 => 23,  64 => 22,  60 => 21,  56 => 20,  52 => 19,  48 => 18,  43 => 16,  37 => 13,  32 => 11,  20 => 1,);
    }
}
