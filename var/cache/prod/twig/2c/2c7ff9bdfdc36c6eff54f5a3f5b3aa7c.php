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

/* special/index.html.twig */
class __TwigTemplate_80202a8347d5388907ac61edc672d49a extends Template
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        // line 5
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 6
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " mb-3\" role=\"alert\">
                ";
                // line 8
                if (($context["label"] == "success")) {
                    // line 9
                    yield "                    <i class=\"fas fa-check-circle me-2\"></i>
                ";
                } elseif ((                // line 10
$context["label"] == "warning")) {
                    // line 11
                    yield "                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                ";
                } elseif ((                // line 12
$context["label"] == "danger")) {
                    // line 13
                    yield "                    <i class=\"fas fa-times-circle me-2\"></i>
                ";
                } else {
                    // line 15
                    yield "                    <i class=\"fas fa-info-circle me-2\"></i>
                ";
                }
                // line 17
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
    ";
        // line 23
        yield "    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h2>Gestion des Specials</h2>
        <div>
            <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("special_new");
        yield "\" class=\"btn btn-primary me-2 d-flex align-items-center\">
                <i class=\"fas fa-plus me-1\"></i> <span>Créer un special</span>
            </a>
            <button class=\"btn btn-outline-secondary d-flex align-items-center\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" style=\"min-width: 44px;\">
                <i class=\"fas fa-bars\"></i>
            </button>
            <ul class=\"dropdown-menu dropdown-menu-end mt-2\">
                <li><a class=\"dropdown-item\" href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chefs_list");
        yield "\"><i class=\"fas fa-user-tie me-2\"></i>Chefs</a></li>
                <li><a class=\"dropdown-item\" href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_index");
        yield "\"><i class=\"fas fa-envelope me-2\"></i>Contacts</a></li>
                <li><hr class=\"dropdown-divider\"></li>
                <li><a class=\"dropdown-item\" ><i class=\"fas fa-sign-out-alt me-2\"></i>Déconnexion</a></li>
            </ul>
        </div>
    </div>

    ";
        // line 41
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["specials"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "        <div class=\"card\">
            <div class=\"card-body p-0\">
                <table class=\"table align-items-center justify-content-center mb-0\">
                    <thead>
                        <tr>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Image</th>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Titre</th>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Sous-titre</th>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2\" style=\"min-width: 120px;\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["specials"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["special"]) {
                // line 55
                yield "                            <tr>
                                <td>
                                    <div class=\"d-flex px-2 align-items-center\">
                                        <div class=\"me-3\">
                                            ";
                // line 59
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["special"], "image", [], "any", true, true, false, 59) && CoreExtension::getAttribute($this->env, $this->source, $context["special"], "image", [], "any", false, false, false, 59))) {
                    // line 60
                    yield "                                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["special"], "image", [], "any", false, false, false, 60), "html", null, true);
                    yield "\" class=\"menu-image\" alt=\"Special Image\">
                                            ";
                } else {
                    // line 62
                    yield "                                                <div class=\"menu-placeholder d-flex align-items-center justify-content-center\"
                                                     style=\"width: 50px; height: 50px; background-color: #6c757d; color: white; border-radius: 8px; font-weight: bold;\">
                                                    ";
                    // line 64
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["special"], "title", [], "any", false, false, false, 64), 0, 1)), "html", null, true);
                    yield "
                                                </div>
                                            ";
                }
                // line 67
                yield "                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h6 class=\"mb-0 text-sm\">";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["special"], "title", [], "any", false, false, false, 71), "html", null, true);
                yield "</h6>
                                </td>
                                <td>
                                    ";
                // line 74
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["special"], "sousTitre", [], "any", true, true, false, 74) && CoreExtension::getAttribute($this->env, $this->source, $context["special"], "sousTitre", [], "any", false, false, false, 74))) {
                    // line 75
                    yield "                                        <p class=\"text-sm mb-0\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["special"], "sousTitre", [], "any", false, false, false, 75), "html", null, true);
                    yield "</p>
                                    ";
                } else {
                    // line 77
                    yield "                                        <span class=\"text-muted text-xs\">Non spécifié</span>
                                    ";
                }
                // line 79
                yield "                                </td>
                                <td class=\"align-middle text-center\">
                                    <div class=\"d-flex justify-content-center gap-2\">
                                        <a href=\"";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("special_show", ["key" => $context["key"]]), "html", null, true);
                yield "\"
                                           class=\"btn btn-info btn-sm d-flex align-items-center\"
                                           title=\"Afficher\">
                                            <i class=\"fas fa-eye me-1\"></i> <span>Voir</span>
                                        </a>
                                        <a href=\"";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("special_edit", ["key" => $context["key"]]), "html", null, true);
                yield "\"
                                           class=\"btn btn-warning btn-sm d-flex align-items-center\"
                                           title=\"Modifier\">
                                            <i class=\"fas fa-edit me-1\"></i> <span>Modifier</span>
                                        </a>
                                        <form method=\"POST\"
                                              action=\"";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("special_delete", ["key" => $context["key"]]), "html", null, true);
                yield "\"
                                              style=\"display: inline;\"
                                              onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce special ?');\">
                                            <button type=\"submit\"
                                                    class=\"btn btn-danger btn-sm d-flex align-items-center\"
                                                    title=\"Supprimer\">
                                                <i class=\"fas fa-trash me-1\"></i> <span>Supprimer</span>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['special'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            yield "                    </tbody>
                </table>
            </div>
        </div>
    ";
        } else {
            // line 111
            yield "        <div class=\"text-center mt-4\">
            <div class=\"card\">
                <div class=\"card-body py-5\">
                    <i class=\"fas fa-star fa-3x text-muted mb-3\"></i>
                    <h5 class=\"text-muted\">Aucun special trouvé</h5>
                    <p class=\"text-muted mb-3\">Commencez par créer un nouveau special.</p>
                    <a href=\"";
            // line 117
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("special_new");
            yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus me-2\"></i>Créer un special
                    </a>
                </div>
            </div>
        </div>
    ";
        }
        // line 124
        yield "
    <style>
    .menu-image {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 8px;
    }
    .table th {
        border-bottom: 1px solid #e9ecef;
        font-weight: 600;
    }
    .gap-2 {
        gap: 0.5rem;
    }
    .btn-info:hover, .btn-warning:hover, .btn-danger:hover, .btn-primary:hover, .btn-outline-secondary:hover {
        filter: brightness(0.95);
        opacity: 0.9;
        transition: 0.2s;
    }
    .btn span {
        font-weight: 500;
    }
    </style>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "special/index.html.twig";
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
        return array (  277 => 124,  267 => 117,  259 => 111,  252 => 106,  233 => 93,  224 => 87,  216 => 82,  211 => 79,  207 => 77,  201 => 75,  199 => 74,  193 => 71,  187 => 67,  181 => 64,  177 => 62,  171 => 60,  169 => 59,  163 => 55,  159 => 54,  145 => 42,  143 => 41,  133 => 34,  129 => 33,  119 => 26,  114 => 23,  111 => 21,  105 => 20,  95 => 17,  91 => 15,  87 => 13,  85 => 12,  82 => 11,  80 => 10,  77 => 9,  75 => 8,  70 => 7,  65 => 6,  60 => 5,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "special/index.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle\\templates\\special\\index.html.twig");
    }
}
