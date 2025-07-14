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

/* special/edit.html.twig */
class __TwigTemplate_8b432312ac530a707321cfb9694b50ab extends Template
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

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Modifier Special";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "<div class=\"container mt-4\">
    <div class=\"card shadow-sm mx-auto\" style=\"max-width: 600px;\">
        <div class=\"card-header bg-warning text-dark\">
            <h2 class=\"mb-0\">Modifier un Special</h2>
        </div>
        <div class=\"card-body\">
            <form method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"mb-3\">
                    <label class=\"form-label\">Titre :</label>
                    <input type=\"text\" name=\"title\" value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["special"] ?? null), "title", [], "any", false, false, false, 14), "html", null, true);
        yield "\" class=\"form-control\" required>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Sous-titre :</label>
                    <input type=\"text\" name=\"sousTitre\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["special"] ?? null), "sousTitre", [], "any", false, false, false, 18), "html", null, true);
        yield "\" class=\"form-control\">
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Description :</label>
                    <textarea name=\"description\" class=\"form-control\" rows=\"4\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["special"] ?? null), "description", [], "any", false, false, false, 22), "html", null, true);
        yield "</textarea>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Image :</label>
                    <input type=\"file\" name=\"image\" class=\"form-control\">
                    ";
        // line 27
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["special"] ?? null), "image", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "                        <div class=\"mt-2\">
                            <img src=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["special"] ?? null), "image", [], "any", false, false, false, 29), "html", null, true);
            yield "\" alt=\"Image\" style=\"max-width:120px; border-radius:8px;\">
                        </div>
                    ";
        }
        // line 32
        yield "                </div>
                <div class=\"d-flex justify-content-between\">
                    <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("special_index");
        yield "\" class=\"btn btn-outline-secondary\">Retour</a>
                    <button type=\"submit\" class=\"btn btn-warning\">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "special/edit.html.twig";
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
        return array (  118 => 34,  114 => 32,  108 => 29,  105 => 28,  103 => 27,  95 => 22,  88 => 18,  81 => 14,  70 => 5,  63 => 4,  52 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "special/edit.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle\\templates\\special\\edit.html.twig");
    }
}
