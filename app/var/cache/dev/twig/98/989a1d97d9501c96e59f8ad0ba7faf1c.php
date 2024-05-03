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

/* users_manager.html.twig */
class __TwigTemplate_9757ca040de93fbb97a0c93dff9d7d2a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users_manager.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users_manager.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "User manager";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class='toolbar'>
    <h3>Actions</h3>
    <div class=\"btn-group\" role=\"group\">
        <button class='btn-action btn-danger btn' onclick=\"deleteSelected()\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\"><g fill=\"white\"><path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z\"/><path d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z\"/></g></svg></button>
        <button class='btn-action btn-warning btn' onclick=\"blockSelected()\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\"><path fill=\"white\" d=\"M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1\"/></svg></button>
        <button class='btn-action btn-success btn' onclick=\"unblockSelected()\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\"><path fill=\"white\" d=\"M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2M3 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1z\"/></svg></button>
    </div>
</div>

<table class='table'>
    <thead>
        <tr>
            <th><input type=\"checkbox\" id=\"select-all\"></th>
            <th>ID</th>
            <th>Name</th>
            <th>Position</th>
            <th>Email</th>
            <th>Last Login</th>
            <th>Register Date</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
       ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 29, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 30
            yield "       ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30) >= ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 30, $this->source); })()) - 1) * (isset($context["itemsPerPage"]) || array_key_exists("itemsPerPage", $context) ? $context["itemsPerPage"] : (function () { throw new RuntimeError('Variable "itemsPerPage" does not exist.', 30, $this->source); })())) + 1)) && (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30) <= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 30, $this->source); })()) * (isset($context["itemsPerPage"]) || array_key_exists("itemsPerPage", $context) ? $context["itemsPerPage"] : (function () { throw new RuntimeError('Variable "itemsPerPage" does not exist.', 30, $this->source); })()))))) {
                // line 31
                yield "            <tr>
                <td><input type=\"checkbox\" class=\"select-user\" value=\"";
                // line 32
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 32), "html", null, true);
                yield "\"></td>
                <td>";
                // line 33
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 33), "html", null, true);
                yield "</td>
                <td>";
                // line 34
                ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "getDetails", [], "method", false, false, false, 34)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "getDetails", [], "method", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true)) : (yield "-"));
                yield "</td>
                <td>";
                // line 35
                ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "getDetails", [], "method", false, false, false, 35)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "getDetails", [], "method", false, false, false, 35), "position", [], "any", false, false, false, 35), "html", null, true)) : (yield "-"));
                yield "</td>
                <td>";
                // line 36
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 36), "html", null, true);
                yield "</td>
                <td>";
                // line 37
                ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastLogin", [], "any", false, false, false, 37)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastLogin", [], "any", false, false, false, 37), "Y-m-d H:i:s"), "html", null, true)) : (yield "-"));
                yield "</td>
                <td>";
                // line 38
                ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "registerDate", [], "any", false, false, false, 38)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "registerDate", [], "any", false, false, false, 38), "Y-m-d H:i:s"), "html", null, true)) : (yield "-"));
                yield "</td>
                <td>";
                // line 39
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 39), "html", null, true);
                yield "</td>
            </tr>
            ";
            }
            // line 42
            yield "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "    </tbody>
</table>
<div class=\"pagination\">
    <div class=\"btn-group\" role=\"group\">
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 47, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 48
            yield "            <button class='btn btn-scondary'><a href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_manager", ["page" => $context["page"]]), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["page"], "html", null, true);
            yield "</a></button>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "    </div>
</div>

<script>
    document.getElementById('select-all').addEventListener('change', function() {
        var checkboxes = document.querySelectorAll('.select-user');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = this.checked;
        }, this);
    });
    
    function deleteSelected() {
        const selectedUsers = document.querySelectorAll('.select-user:checked');
        selectedUsers.forEach(user => {
            window.location.href = `/users-manager/delete/\${user.value}`;
        });
    }

    function blockSelected() {
        const selectedUsers = document.querySelectorAll('.select-user:checked');
        selectedUsers.forEach(user => {
            window.location.href = `/users-manager/block/\${user.value}`;
        });
    }

    function unblockSelected() {
        const selectedUsers = document.querySelectorAll('.select-user:checked');
        selectedUsers.forEach(user => {
            window.location.href = `/users-manager/unblock/\${user.value}`;
        });
    }
</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "users_manager.html.twig";
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
        return array (  192 => 50,  181 => 48,  177 => 47,  171 => 43,  157 => 42,  151 => 39,  147 => 38,  143 => 37,  139 => 36,  135 => 35,  131 => 34,  127 => 33,  123 => 32,  120 => 31,  117 => 30,  100 => 29,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User manager{% endblock %}

{% block body %}
<div class='toolbar'>
    <h3>Actions</h3>
    <div class=\"btn-group\" role=\"group\">
        <button class='btn-action btn-danger btn' onclick=\"deleteSelected()\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\"><g fill=\"white\"><path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z\"/><path d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z\"/></g></svg></button>
        <button class='btn-action btn-warning btn' onclick=\"blockSelected()\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\"><path fill=\"white\" d=\"M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1\"/></svg></button>
        <button class='btn-action btn-success btn' onclick=\"unblockSelected()\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\"><path fill=\"white\" d=\"M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2M3 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1z\"/></svg></button>
    </div>
</div>

<table class='table'>
    <thead>
        <tr>
            <th><input type=\"checkbox\" id=\"select-all\"></th>
            <th>ID</th>
            <th>Name</th>
            <th>Position</th>
            <th>Email</th>
            <th>Last Login</th>
            <th>Register Date</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
       {% for user in users %}
       {% if loop.index >= (currentPage - 1) * itemsPerPage + 1 and loop.index <= currentPage * itemsPerPage %}
            <tr>
                <td><input type=\"checkbox\" class=\"select-user\" value=\"{{ user.id }}\"></td>
                <td>{{ user.id }}</td>
                <td>{{ user.getDetails() ? user.getDetails().name : \"-\" }}</td>
                <td>{{ user.getDetails() ? user.getDetails().position : \"-\" }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.lastLogin ? user.lastLogin|date('Y-m-d H:i:s') : '-' }}</td>
                <td>{{ user.registerDate ? user.registerDate|date('Y-m-d H:i:s') : '-' }}</td>
                <td>{{ user.status }}</td>
            </tr>
            {% endif %}
        {% endfor %}
    </tbody>
</table>
<div class=\"pagination\">
    <div class=\"btn-group\" role=\"group\">
        {% for page in 1..totalPages %}
            <button class='btn btn-scondary'><a href=\"{{ path('users_manager', {'page': page}) }}\">{{ page }}</a></button>
        {% endfor %}
    </div>
</div>

<script>
    document.getElementById('select-all').addEventListener('change', function() {
        var checkboxes = document.querySelectorAll('.select-user');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = this.checked;
        }, this);
    });
    
    function deleteSelected() {
        const selectedUsers = document.querySelectorAll('.select-user:checked');
        selectedUsers.forEach(user => {
            window.location.href = `/users-manager/delete/\${user.value}`;
        });
    }

    function blockSelected() {
        const selectedUsers = document.querySelectorAll('.select-user:checked');
        selectedUsers.forEach(user => {
            window.location.href = `/users-manager/block/\${user.value}`;
        });
    }

    function unblockSelected() {
        const selectedUsers = document.querySelectorAll('.select-user:checked');
        selectedUsers.forEach(user => {
            window.location.href = `/users-manager/unblock/\${user.value}`;
        });
    }
</script>

{% endblock %}
", "users_manager.html.twig", "C:\\Users\\Sofiya\\project1\\templates\\users_manager.html.twig");
    }
}
