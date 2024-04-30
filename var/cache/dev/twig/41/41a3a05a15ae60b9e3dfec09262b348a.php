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
class __TwigTemplate_d23e459d061abd8ab0d034128ac4bcb8 extends Template
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
    <button class='btn btn-action' onclick=\"deleteSelected()\">Delete Selected</button>
<button class='btn btn-action' onclick=\"blockSelected()\"></button>
<button class='btn btn-action' onclick=\"unblockSelected()\">Unblock Selected</button>
</div>

<table class=\"table\">
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
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 28
            yield "            <tr>
                <td><input type=\"checkbox\" class=\"select-user\" value=\"";
            // line 29
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 29), "html", null, true);
            yield "\"></td>
                <td>";
            // line 30
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                <td>";
            // line 31
            ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "getDetails", [], "method", false, false, false, 31)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "getDetails", [], "method", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true)) : (yield "-"));
            yield "</td>
                <td>";
            // line 32
            ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "getDetails", [], "method", false, false, false, 32)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "getDetails", [], "method", false, false, false, 32), "position", [], "any", false, false, false, 32), "html", null, true)) : (yield "-"));
            yield "</td>
                <td>";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                <td>";
            // line 34
            ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastLogin", [], "any", false, false, false, 34)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastLogin", [], "any", false, false, false, 34), "Y-m-d H:i:s"), "html", null, true)) : (yield "-"));
            yield "</td>
                <td>";
            // line 35
            ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "registerDate", [], "any", false, false, false, 35)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "registerDate", [], "any", false, false, false, 35), "Y-m-d H:i:s"), "html", null, true)) : (yield "-"));
            yield "</td>
                <td>";
            // line 36
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "    </tbody>
</table>

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
        return array (  142 => 39,  133 => 36,  129 => 35,  125 => 34,  121 => 33,  117 => 32,  113 => 31,  109 => 30,  105 => 29,  102 => 28,  98 => 27,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User manager{% endblock %}

{% block body %}
<div class='toolbar'>
    <h3>Actions</h3>
    <button class='btn btn-action' onclick=\"deleteSelected()\">Delete Selected</button>
<button class='btn btn-action' onclick=\"blockSelected()\"></button>
<button class='btn btn-action' onclick=\"unblockSelected()\">Unblock Selected</button>
</div>

<table class=\"table\">
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
        {% endfor %}
    </tbody>
</table>

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
