<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* header.html.twig */
class __TwigTemplate_1be8335ae8f4f3c8e5375529c6407f6d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        yield "<nav class='main-menu'>
    <div class=\"container\">
    ";
        // line 3
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 4
            yield "        <div >
           ";
            // line 5
            $context["userDetails"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5), "details", [], "any", false, false, false, 5);
            // line 6
            yield "            ";
            if ((isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 6, $this->source); })())) {
                // line 7
                yield "                <span>You are logged in as ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
                yield ", <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                yield "\">Logout</a></span>
            ";
            } else {
                // line 9
                yield "                <span>You are logged in as no-name user, <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                yield "\">Logout</a></span>
            ";
            }
            // line 11
            yield "        </div>
    ";
        } else {
            // line 13
            yield "        <div >
            <a href=\"";
            // line 14
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class='btn btn-header'>Login</a>
            <a href=\"";
            // line 15
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class='btn btn-header'>Registration</a>
        </div>
    ";
        }
        // line 18
        yield "    </div>
</nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  86 => 18,  80 => 15,  76 => 14,  73 => 13,  69 => 11,  63 => 9,  55 => 7,  52 => 6,  50 => 5,  47 => 4,  45 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class='main-menu'>
    <div class=\"container\">
    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        <div >
           {% set userDetails = app.user.details %}
            {% if userDetails %}
                <span>You are logged in as {{ userDetails.name }}, <a href=\"{{ path('app_logout') }}\">Logout</a></span>
            {% else %}
                <span>You are logged in as no-name user, <a href=\"{{ path('app_logout') }}\">Logout</a></span>
            {% endif %}
        </div>
    {% else %}
        <div >
            <a href=\"{{ path('app_login') }}\" class='btn btn-header'>Login</a>
            <a href=\"{{ path('app_register') }}\" class='btn btn-header'>Registration</a>
        </div>
    {% endif %}
    </div>
</nav>
", "header.html.twig", "C:\\Users\\Sofiya\\project1\\templates\\header.html.twig");
    }
}
