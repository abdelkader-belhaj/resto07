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
use Twig\TemplateWrapper;

/* tableFirebase/new.html.twig */
class __TwigTemplate_51ea324990b5d57ec2a29a1518c8a1e8 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("baseAdmin.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Nouvelle Réservation";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<h1>Nouvelle Réservation</h1>
<form method=\"post\">
    <div class=\"mb-3\">
        <label>Nom</label>
        <input type=\"text\" name=\"name\" class=\"form-control\" required>
    </div>
    <div class=\"mb-3\">
        <label>Email</label>
        <input type=\"email\" name=\"email\" class=\"form-control\" required>
    </div>
    <div class=\"mb-3\">
        <label>Téléphone</label>
        <input type=\"text\" name=\"tel\" class=\"form-control\" required>
    </div>
    <div class=\"mb-3\">
        <label>Date</label>
        <input type=\"date\" name=\"date\" class=\"form-control\" required>
    </div>
    <div class=\"mb-3\">
        <label>Heure</label>
        <input type=\"time\" name=\"time\" class=\"form-control\" required>
    </div>
    <div class=\"mb-3\">
        <label>Nombre de personnes</label>
        <input type=\"number\" name=\"numberPeople\" class=\"form-control\" required>
    </div>
    <div class=\"mb-3\">
        <label>Message</label>
        <textarea name=\"message\" class=\"form-control\"></textarea>
    </div>
    <button class=\"btn btn-success\">Créer</button>
    <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_table_index");
        yield "\" class=\"btn btn-secondary\">Retour</a>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "tableFirebase/new.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  103 => 37,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "tableFirebase/new.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle\\templates\\tableFirebase\\new.html.twig");
    }
}
