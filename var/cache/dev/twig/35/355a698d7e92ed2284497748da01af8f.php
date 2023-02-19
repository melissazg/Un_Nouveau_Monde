<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* footer.html.twig */
class __TwigTemplate_a9b602c1cf88f2c5907dcd9f92cd1824 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo " <!-- Footer -->
    <footer style=\"background-color: #212529\">
        <div class=\"container py-5\">
            <div class=\"row py-4\">
                <div class=\"col-lg-3 col-md-6 mb-4 mb-lg-0 text-center\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"200\">
                    <h3 class=\"text-uppercase font-weight-bold mb-4\"> Rejoignez-nous ! </h3>
                        <table class=\"text-muted table table-borderless\">
                            <tr>
                                <td>
                                    <a href=\"#\" target=\"_blank\" title=\"twitter\"><i class=\"fa fa-twitter fa-4x\"></i></a>
                                </td>
                                <td>
                                    <a href=\"#\" target=\"_blank\" title=\"facebook\"><i class=\"fa fa-facebook fa-4x\"></i></a>
                                </td>
                                <td>
                                    <a href=\"#\" target=\"_blank\" title=\"instagram\"><i class=\"fa fa-instagram fa-4x\"></i></a>
                                </td>
                            </tr>
                        </table>
                </div>

                <div class=\"col-lg-3 mb-3\">
                    <h6 class=\"text-uppercase font-weight-bold mb-4\">Contact</h6>
                    <ul class=\"list-unstyled mb-0\">
                        <li class=\"mb-2\"></li>
                        <li class=\"mb-2\"><a href=\"#\" class=\"text-muted text-decoration-none\"><i class=\"fa-solid fa-location-dot fa-lg\"></i>&emsp;1, rue de Paris <br>&emsp;&emsp; 75001 Paris </a></li>
                        <li class=\"mb-2\"><a href=\"#\" class=\"text-muted text-decoration-none\"><i class=\"fa-solid fa-phone fa-lg\"></i>&emsp;06 11 11 11 11 </a></li>
                        <li class=\"mb-2\"><a href=\"#\" class=\"text-muted text-decoration-none\"><i class=\"fa-solid fa-envelope fa-lg\"></i>&emsp;exemple@mail.fr </a></li>
                    </ul>
                    <div class=\"p-1 rounded border\">
                        <button id=\"button-addon1\" aria-describedby=\"button-addon1\" class=\"form-control text-muted border-0 shadow-0\"><i class=\"fa-solid fa-message fa-lg\">&emsp;</i> Envoyer un message </button>
                    </div>
                </div>

                <div class=\"col-lg-2 mr-2\">
                    <h6 class=\"text-uppercase font-weight-bold mb-4\"> Horaire </h6>
                    <table class=\"text-muted table table-borderless\">
                        <tr><td> Lundi </td><td> 9h - 18h </td></tr>
                        <tr><td> Mardi </td><td> 9h - 18h </td></tr>
                        <tr><td> Mercredi </td><td> 9h - 18h </td></tr>
                        <tr><td> Jeudi </td><td> 9h - 18h </td></tr>
                        <tr><td> Vendredi </td><td> 9h - 18h </td></tr>
                        <tr><td> Samedi </td><td> Fermé </td></tr>
                        <tr><td> Dimanche </td><td> Fermé </td></tr>
                    </table>
                </div>

                <div class=\"col-lg-4\">
                    <h6 class=\"text-uppercase font-weight-bold mb-4\"> Newsletter </h6>
                    <p class=\"text-muted mb-4\"> Inscrivez-vous à la Newsletter afin de suivre toutes nos actualités et recevoir des contenus exclusifs ! </p>
                    <div class=\"p-1 rounded border\">
                        <div class=\"input-group\">
                            <input type=\"email\" placeholder=\"Entrez votre adresse mail\" aria-describedby=\"button-addon1\" class=\"form-control border-0 shadow-0\">
                            <div class=\"input-group-append\">
                                <button id=\"button-addon1\" type=\"submit\" class=\"btn btn-link\"><i class=\"fa fa-paper-plane\"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <p class=\"text-muted mb-0 py-2 text-center\">Copyright © 2023 MIAGE All rights reserved.</p>
        </div>
    </footer>
    <!-- End -->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <!-- Footer -->
    <footer style=\"background-color: #212529\">
        <div class=\"container py-5\">
            <div class=\"row py-4\">
                <div class=\"col-lg-3 col-md-6 mb-4 mb-lg-0 text-center\"><img src=\"{{ asset('img/logo.png') }}\" alt=\"logo\" width=\"200\">
                    <h3 class=\"text-uppercase font-weight-bold mb-4\"> Rejoignez-nous ! </h3>
                        <table class=\"text-muted table table-borderless\">
                            <tr>
                                <td>
                                    <a href=\"#\" target=\"_blank\" title=\"twitter\"><i class=\"fa fa-twitter fa-4x\"></i></a>
                                </td>
                                <td>
                                    <a href=\"#\" target=\"_blank\" title=\"facebook\"><i class=\"fa fa-facebook fa-4x\"></i></a>
                                </td>
                                <td>
                                    <a href=\"#\" target=\"_blank\" title=\"instagram\"><i class=\"fa fa-instagram fa-4x\"></i></a>
                                </td>
                            </tr>
                        </table>
                </div>

                <div class=\"col-lg-3 mb-3\">
                    <h6 class=\"text-uppercase font-weight-bold mb-4\">Contact</h6>
                    <ul class=\"list-unstyled mb-0\">
                        <li class=\"mb-2\"></li>
                        <li class=\"mb-2\"><a href=\"#\" class=\"text-muted text-decoration-none\"><i class=\"fa-solid fa-location-dot fa-lg\"></i>&emsp;1, rue de Paris <br>&emsp;&emsp; 75001 Paris </a></li>
                        <li class=\"mb-2\"><a href=\"#\" class=\"text-muted text-decoration-none\"><i class=\"fa-solid fa-phone fa-lg\"></i>&emsp;06 11 11 11 11 </a></li>
                        <li class=\"mb-2\"><a href=\"#\" class=\"text-muted text-decoration-none\"><i class=\"fa-solid fa-envelope fa-lg\"></i>&emsp;exemple@mail.fr </a></li>
                    </ul>
                    <div class=\"p-1 rounded border\">
                        <button id=\"button-addon1\" aria-describedby=\"button-addon1\" class=\"form-control text-muted border-0 shadow-0\"><i class=\"fa-solid fa-message fa-lg\">&emsp;</i> Envoyer un message </button>
                    </div>
                </div>

                <div class=\"col-lg-2 mr-2\">
                    <h6 class=\"text-uppercase font-weight-bold mb-4\"> Horaire </h6>
                    <table class=\"text-muted table table-borderless\">
                        <tr><td> Lundi </td><td> 9h - 18h </td></tr>
                        <tr><td> Mardi </td><td> 9h - 18h </td></tr>
                        <tr><td> Mercredi </td><td> 9h - 18h </td></tr>
                        <tr><td> Jeudi </td><td> 9h - 18h </td></tr>
                        <tr><td> Vendredi </td><td> 9h - 18h </td></tr>
                        <tr><td> Samedi </td><td> Fermé </td></tr>
                        <tr><td> Dimanche </td><td> Fermé </td></tr>
                    </table>
                </div>

                <div class=\"col-lg-4\">
                    <h6 class=\"text-uppercase font-weight-bold mb-4\"> Newsletter </h6>
                    <p class=\"text-muted mb-4\"> Inscrivez-vous à la Newsletter afin de suivre toutes nos actualités et recevoir des contenus exclusifs ! </p>
                    <div class=\"p-1 rounded border\">
                        <div class=\"input-group\">
                            <input type=\"email\" placeholder=\"Entrez votre adresse mail\" aria-describedby=\"button-addon1\" class=\"form-control border-0 shadow-0\">
                            <div class=\"input-group-append\">
                                <button id=\"button-addon1\" type=\"submit\" class=\"btn btn-link\"><i class=\"fa fa-paper-plane\"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <p class=\"text-muted mb-0 py-2 text-center\">Copyright © 2023 MIAGE All rights reserved.</p>
        </div>
    </footer>
    <!-- End -->
", "footer.html.twig", "/Applications/MAMP/htdocs/un-nouveau-monde/templates/footer.html.twig");
    }
}