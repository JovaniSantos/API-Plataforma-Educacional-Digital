<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Lista-de-Tarefas API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.2.1.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.2.1.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-administradores" class="tocify-header">
                <li class="tocify-item level-1" data-unique="administradores">
                    <a href="#administradores">Administradores</a>
                </li>
                                    <ul id="tocify-subheader-administradores" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="administradores-GETapi-v1-admin-admins">
                                <a href="#administradores-GETapi-v1-admin-admins">GET api/v1/admin/admins</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="administradores-POSTapi-v1-admin-admins">
                                <a href="#administradores-POSTapi-v1-admin-admins">POST api/v1/admin/admins</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="administradores-GETapi-v1-admin-admins--id-">
                                <a href="#administradores-GETapi-v1-admin-admins--id-">GET api/v1/admin/admins/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="administradores-PUTapi-v1-admin-admins--id-">
                                <a href="#administradores-PUTapi-v1-admin-admins--id-">PUT api/v1/admin/admins/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="administradores-DELETEapi-v1-admin-admins--id-">
                                <a href="#administradores-DELETEapi-v1-admin-admins--id-">DELETE api/v1/admin/admins/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-atividades" class="tocify-header">
                <li class="tocify-item level-1" data-unique="atividades">
                    <a href="#atividades">Atividades</a>
                </li>
                                    <ul id="tocify-subheader-atividades" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="atividades-GETapi-v1-teacher-activities">
                                <a href="#atividades-GETapi-v1-teacher-activities">GET api/v1/teacher/activities</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="atividades-POSTapi-v1-teacher-activities">
                                <a href="#atividades-POSTapi-v1-teacher-activities">POST api/v1/teacher/activities</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="atividades-GETapi-v1-teacher-activities--id-">
                                <a href="#atividades-GETapi-v1-teacher-activities--id-">GET api/v1/teacher/activities/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="atividades-PUTapi-v1-teacher-activities--id-">
                                <a href="#atividades-PUTapi-v1-teacher-activities--id-">PUT api/v1/teacher/activities/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="atividades-DELETEapi-v1-teacher-activities--id-">
                                <a href="#atividades-DELETEapi-v1-teacher-activities--id-">DELETE api/v1/teacher/activities/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-atribuicoes-de-professores" class="tocify-header">
                <li class="tocify-item level-1" data-unique="atribuicoes-de-professores">
                    <a href="#atribuicoes-de-professores">Atribuições de Professores</a>
                </li>
                                    <ul id="tocify-subheader-atribuicoes-de-professores" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="atribuicoes-de-professores-GETapi-v1-teacher-teacher-assignments">
                                <a href="#atribuicoes-de-professores-GETapi-v1-teacher-teacher-assignments">GET api/v1/teacher/teacher-assignments</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="atribuicoes-de-professores-POSTapi-v1-teacher-teacher-assignments">
                                <a href="#atribuicoes-de-professores-POSTapi-v1-teacher-teacher-assignments">POST api/v1/teacher/teacher-assignments</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="atribuicoes-de-professores-GETapi-v1-teacher-teacher-assignments--id-">
                                <a href="#atribuicoes-de-professores-GETapi-v1-teacher-teacher-assignments--id-">GET api/v1/teacher/teacher-assignments/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="atribuicoes-de-professores-PUTapi-v1-teacher-teacher-assignments--id-">
                                <a href="#atribuicoes-de-professores-PUTapi-v1-teacher-teacher-assignments--id-">PUT api/v1/teacher/teacher-assignments/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="atribuicoes-de-professores-DELETEapi-v1-teacher-teacher-assignments--id-">
                                <a href="#atribuicoes-de-professores-DELETEapi-v1-teacher-teacher-assignments--id-">DELETE api/v1/teacher/teacher-assignments/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-autenticacao" class="tocify-header">
                <li class="tocify-item level-1" data-unique="autenticacao">
                    <a href="#autenticacao">Autenticação</a>
                </li>
                                    <ul id="tocify-subheader-autenticacao" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="autenticacao-POSTapi-v1-login">
                                <a href="#autenticacao-POSTapi-v1-login">POST api/v1/login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="autenticacao-POSTapi-v1-logout">
                                <a href="#autenticacao-POSTapi-v1-logout">POST api/v1/logout</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-categorias-de-forum" class="tocify-header">
                <li class="tocify-item level-1" data-unique="categorias-de-forum">
                    <a href="#categorias-de-forum">Categorias de Fórum</a>
                </li>
                                    <ul id="tocify-subheader-categorias-de-forum" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="categorias-de-forum-GETapi-v1-admin-forum-categories">
                                <a href="#categorias-de-forum-GETapi-v1-admin-forum-categories">GET api/v1/admin/forum-categories</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="categorias-de-forum-POSTapi-v1-admin-forum-categories">
                                <a href="#categorias-de-forum-POSTapi-v1-admin-forum-categories">POST api/v1/admin/forum-categories</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="categorias-de-forum-GETapi-v1-admin-forum-categories--id-">
                                <a href="#categorias-de-forum-GETapi-v1-admin-forum-categories--id-">GET api/v1/admin/forum-categories/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="categorias-de-forum-PUTapi-v1-admin-forum-categories--id-">
                                <a href="#categorias-de-forum-PUTapi-v1-admin-forum-categories--id-">PUT api/v1/admin/forum-categories/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="categorias-de-forum-DELETEapi-v1-admin-forum-categories--id-">
                                <a href="#categorias-de-forum-DELETEapi-v1-admin-forum-categories--id-">DELETE api/v1/admin/forum-categories/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-configuracoes-do-sistema" class="tocify-header">
                <li class="tocify-item level-1" data-unique="configuracoes-do-sistema">
                    <a href="#configuracoes-do-sistema">Configurações do Sistema</a>
                </li>
                                    <ul id="tocify-subheader-configuracoes-do-sistema" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="configuracoes-do-sistema-GETapi-v1-admin-system-settings">
                                <a href="#configuracoes-do-sistema-GETapi-v1-admin-system-settings">GET api/v1/admin/system-settings</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="configuracoes-do-sistema-POSTapi-v1-admin-system-settings">
                                <a href="#configuracoes-do-sistema-POSTapi-v1-admin-system-settings">POST api/v1/admin/system-settings</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="configuracoes-do-sistema-GETapi-v1-admin-system-settings--id-">
                                <a href="#configuracoes-do-sistema-GETapi-v1-admin-system-settings--id-">GET api/v1/admin/system-settings/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="configuracoes-do-sistema-PUTapi-v1-admin-system-settings--id-">
                                <a href="#configuracoes-do-sistema-PUTapi-v1-admin-system-settings--id-">PUT api/v1/admin/system-settings/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="configuracoes-do-sistema-DELETEapi-v1-admin-system-settings--id-">
                                <a href="#configuracoes-do-sistema-DELETEapi-v1-admin-system-settings--id-">DELETE api/v1/admin/system-settings/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-disciplinas" class="tocify-header">
                <li class="tocify-item level-1" data-unique="disciplinas">
                    <a href="#disciplinas">Disciplinas</a>
                </li>
                                    <ul id="tocify-subheader-disciplinas" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="disciplinas-GETapi-v1-admin-subjects">
                                <a href="#disciplinas-GETapi-v1-admin-subjects">GET api/v1/admin/subjects</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="disciplinas-POSTapi-v1-admin-subjects">
                                <a href="#disciplinas-POSTapi-v1-admin-subjects">POST api/v1/admin/subjects</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="disciplinas-GETapi-v1-admin-subjects--id-">
                                <a href="#disciplinas-GETapi-v1-admin-subjects--id-">GET api/v1/admin/subjects/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="disciplinas-PUTapi-v1-admin-subjects--id-">
                                <a href="#disciplinas-PUTapi-v1-admin-subjects--id-">PUT api/v1/admin/subjects/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="disciplinas-DELETEapi-v1-admin-subjects--id-">
                                <a href="#disciplinas-DELETEapi-v1-admin-subjects--id-">DELETE api/v1/admin/subjects/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-documentation">
                                <a href="#endpoints-GETapi-documentation">Handles the API request and renders the Swagger documentation view.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-oauth2-callback">
                                <a href="#endpoints-GETapi-oauth2-callback">Handles the OAuth2 callback and retrieves the required file for the redirect.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-teste">
                                <a href="#endpoints-GETapi-teste">GET api/teste</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-escolas" class="tocify-header">
                <li class="tocify-item level-1" data-unique="escolas">
                    <a href="#escolas">Escolas</a>
                </li>
                                    <ul id="tocify-subheader-escolas" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="escolas-GETapi-v1-admin-schools">
                                <a href="#escolas-GETapi-v1-admin-schools">GET api/v1/admin/schools</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="escolas-POSTapi-v1-admin-schools">
                                <a href="#escolas-POSTapi-v1-admin-schools">POST api/v1/admin/schools</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="escolas-GETapi-v1-admin-schools--id-">
                                <a href="#escolas-GETapi-v1-admin-schools--id-">GET api/v1/admin/schools/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="escolas-PUTapi-v1-admin-schools--id-">
                                <a href="#escolas-PUTapi-v1-admin-schools--id-">PUT api/v1/admin/schools/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="escolas-DELETEapi-v1-admin-schools--id-">
                                <a href="#escolas-DELETEapi-v1-admin-schools--id-">DELETE api/v1/admin/schools/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-estudantes" class="tocify-header">
                <li class="tocify-item level-1" data-unique="estudantes">
                    <a href="#estudantes">Estudantes</a>
                </li>
                                    <ul id="tocify-subheader-estudantes" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="estudantes-GETapi-v1-student-students">
                                <a href="#estudantes-GETapi-v1-student-students">GET api/v1/student/students</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="estudantes-POSTapi-v1-student-students">
                                <a href="#estudantes-POSTapi-v1-student-students">POST api/v1/student/students</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="estudantes-GETapi-v1-student-students--id-">
                                <a href="#estudantes-GETapi-v1-student-students--id-">GET api/v1/student/students/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="estudantes-PUTapi-v1-student-students--id-">
                                <a href="#estudantes-PUTapi-v1-student-students--id-">PUT api/v1/student/students/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="estudantes-DELETEapi-v1-student-students--id-">
                                <a href="#estudantes-DELETEapi-v1-student-students--id-">DELETE api/v1/student/students/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-eventos-de-calendario" class="tocify-header">
                <li class="tocify-item level-1" data-unique="eventos-de-calendario">
                    <a href="#eventos-de-calendario">Eventos de Calendário</a>
                </li>
                                    <ul id="tocify-subheader-eventos-de-calendario" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="eventos-de-calendario-GETapi-v1-admin-calendar-events">
                                <a href="#eventos-de-calendario-GETapi-v1-admin-calendar-events">GET api/v1/admin/calendar-events</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="eventos-de-calendario-POSTapi-v1-admin-calendar-events">
                                <a href="#eventos-de-calendario-POSTapi-v1-admin-calendar-events">POST api/v1/admin/calendar-events</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="eventos-de-calendario-GETapi-v1-admin-calendar-events--id-">
                                <a href="#eventos-de-calendario-GETapi-v1-admin-calendar-events--id-">GET api/v1/admin/calendar-events/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="eventos-de-calendario-PUTapi-v1-admin-calendar-events--id-">
                                <a href="#eventos-de-calendario-PUTapi-v1-admin-calendar-events--id-">PUT api/v1/admin/calendar-events/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="eventos-de-calendario-DELETEapi-v1-admin-calendar-events--id-">
                                <a href="#eventos-de-calendario-DELETEapi-v1-admin-calendar-events--id-">DELETE api/v1/admin/calendar-events/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-logs-de-auditoria" class="tocify-header">
                <li class="tocify-item level-1" data-unique="logs-de-auditoria">
                    <a href="#logs-de-auditoria">Logs de Auditoria</a>
                </li>
                                    <ul id="tocify-subheader-logs-de-auditoria" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="logs-de-auditoria-GETapi-v1-admin-audit-logs">
                                <a href="#logs-de-auditoria-GETapi-v1-admin-audit-logs">GET api/v1/admin/audit-logs</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="logs-de-auditoria-POSTapi-v1-admin-audit-logs">
                                <a href="#logs-de-auditoria-POSTapi-v1-admin-audit-logs">POST api/v1/admin/audit-logs</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="logs-de-auditoria-GETapi-v1-admin-audit-logs--id-">
                                <a href="#logs-de-auditoria-GETapi-v1-admin-audit-logs--id-">GET api/v1/admin/audit-logs/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="logs-de-auditoria-PUTapi-v1-admin-audit-logs--id-">
                                <a href="#logs-de-auditoria-PUTapi-v1-admin-audit-logs--id-">PUT api/v1/admin/audit-logs/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="logs-de-auditoria-DELETEapi-v1-admin-audit-logs--id-">
                                <a href="#logs-de-auditoria-DELETEapi-v1-admin-audit-logs--id-">DELETE api/v1/admin/audit-logs/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-materiais" class="tocify-header">
                <li class="tocify-item level-1" data-unique="materiais">
                    <a href="#materiais">Materiais</a>
                </li>
                                    <ul id="tocify-subheader-materiais" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="materiais-GETapi-v1-teacher-materials">
                                <a href="#materiais-GETapi-v1-teacher-materials">GET api/v1/teacher/materials</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="materiais-POSTapi-v1-teacher-materials">
                                <a href="#materiais-POSTapi-v1-teacher-materials">POST api/v1/teacher/materials</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="materiais-GETapi-v1-teacher-materials--id-">
                                <a href="#materiais-GETapi-v1-teacher-materials--id-">GET api/v1/teacher/materials/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="materiais-PUTapi-v1-teacher-materials--id-">
                                <a href="#materiais-PUTapi-v1-teacher-materials--id-">PUT api/v1/teacher/materials/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="materiais-DELETEapi-v1-teacher-materials--id-">
                                <a href="#materiais-DELETEapi-v1-teacher-materials--id-">DELETE api/v1/teacher/materials/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-matriculas" class="tocify-header">
                <li class="tocify-item level-1" data-unique="matriculas">
                    <a href="#matriculas">Matrículas</a>
                </li>
                                    <ul id="tocify-subheader-matriculas" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="matriculas-GETapi-v1-student-enrollments">
                                <a href="#matriculas-GETapi-v1-student-enrollments">GET api/v1/student/enrollments</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="matriculas-POSTapi-v1-student-enrollments">
                                <a href="#matriculas-POSTapi-v1-student-enrollments">POST api/v1/student/enrollments</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="matriculas-GETapi-v1-student-enrollments--id-">
                                <a href="#matriculas-GETapi-v1-student-enrollments--id-">GET api/v1/student/enrollments/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="matriculas-PUTapi-v1-student-enrollments--id-">
                                <a href="#matriculas-PUTapi-v1-student-enrollments--id-">PUT api/v1/student/enrollments/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="matriculas-DELETEapi-v1-student-enrollments--id-">
                                <a href="#matriculas-DELETEapi-v1-student-enrollments--id-">DELETE api/v1/student/enrollments/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-mensagens" class="tocify-header">
                <li class="tocify-item level-1" data-unique="mensagens">
                    <a href="#mensagens">Mensagens</a>
                </li>
                                    <ul id="tocify-subheader-mensagens" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="mensagens-GETapi-v1-messages">
                                <a href="#mensagens-GETapi-v1-messages">GET api/v1/messages</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="mensagens-POSTapi-v1-messages">
                                <a href="#mensagens-POSTapi-v1-messages">POST api/v1/messages</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="mensagens-GETapi-v1-messages--id-">
                                <a href="#mensagens-GETapi-v1-messages--id-">GET api/v1/messages/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="mensagens-PUTapi-v1-messages--id-">
                                <a href="#mensagens-PUTapi-v1-messages--id-">PUT api/v1/messages/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="mensagens-DELETEapi-v1-messages--id-">
                                <a href="#mensagens-DELETEapi-v1-messages--id-">DELETE api/v1/messages/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-notas" class="tocify-header">
                <li class="tocify-item level-1" data-unique="notas">
                    <a href="#notas">Notas</a>
                </li>
                                    <ul id="tocify-subheader-notas" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="notas-GETapi-v1-student-grades">
                                <a href="#notas-GETapi-v1-student-grades">GET api/v1/student/grades</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="notas-POSTapi-v1-student-grades">
                                <a href="#notas-POSTapi-v1-student-grades">POST api/v1/student/grades</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="notas-GETapi-v1-student-grades--id-">
                                <a href="#notas-GETapi-v1-student-grades--id-">GET api/v1/student/grades/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="notas-PUTapi-v1-student-grades--id-">
                                <a href="#notas-PUTapi-v1-student-grades--id-">PUT api/v1/student/grades/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="notas-DELETEapi-v1-student-grades--id-">
                                <a href="#notas-DELETEapi-v1-student-grades--id-">DELETE api/v1/student/grades/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="notas-GETapi-v1-student-grades-summary">
                                <a href="#notas-GETapi-v1-student-grades-summary">GET api/v1/student/grades/summary</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-notificacoes" class="tocify-header">
                <li class="tocify-item level-1" data-unique="notificacoes">
                    <a href="#notificacoes">Notificações</a>
                </li>
                                    <ul id="tocify-subheader-notificacoes" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="notificacoes-GETapi-v1-notifications">
                                <a href="#notificacoes-GETapi-v1-notifications">GET api/v1/notifications</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="notificacoes-POSTapi-v1-notifications">
                                <a href="#notificacoes-POSTapi-v1-notifications">POST api/v1/notifications</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="notificacoes-GETapi-v1-notifications--id-">
                                <a href="#notificacoes-GETapi-v1-notifications--id-">GET api/v1/notifications/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="notificacoes-PUTapi-v1-notifications--id-">
                                <a href="#notificacoes-PUTapi-v1-notifications--id-">PUT api/v1/notifications/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="notificacoes-DELETEapi-v1-notifications--id-">
                                <a href="#notificacoes-DELETEapi-v1-notifications--id-">DELETE api/v1/notifications/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-participantes-de-eventos" class="tocify-header">
                <li class="tocify-item level-1" data-unique="participantes-de-eventos">
                    <a href="#participantes-de-eventos">Participantes de Eventos</a>
                </li>
                                    <ul id="tocify-subheader-participantes-de-eventos" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="participantes-de-eventos-GETapi-v1-event-participants">
                                <a href="#participantes-de-eventos-GETapi-v1-event-participants">GET api/v1/event-participants</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="participantes-de-eventos-POSTapi-v1-event-participants">
                                <a href="#participantes-de-eventos-POSTapi-v1-event-participants">POST api/v1/event-participants</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="participantes-de-eventos-GETapi-v1-event-participants--id-">
                                <a href="#participantes-de-eventos-GETapi-v1-event-participants--id-">GET api/v1/event-participants/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="participantes-de-eventos-PUTapi-v1-event-participants--id-">
                                <a href="#participantes-de-eventos-PUTapi-v1-event-participants--id-">PUT api/v1/event-participants/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="participantes-de-eventos-DELETEapi-v1-event-participants--id-">
                                <a href="#participantes-de-eventos-DELETEapi-v1-event-participants--id-">DELETE api/v1/event-participants/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-presencas" class="tocify-header">
                <li class="tocify-item level-1" data-unique="presencas">
                    <a href="#presencas">Presenças</a>
                </li>
                                    <ul id="tocify-subheader-presencas" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="presencas-GETapi-v1-teacher-attendance">
                                <a href="#presencas-GETapi-v1-teacher-attendance">GET api/v1/teacher/attendance</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="presencas-POSTapi-v1-teacher-attendance">
                                <a href="#presencas-POSTapi-v1-teacher-attendance">POST api/v1/teacher/attendance</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="presencas-GETapi-v1-teacher-attendance--id-">
                                <a href="#presencas-GETapi-v1-teacher-attendance--id-">GET api/v1/teacher/attendance/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="presencas-PUTapi-v1-teacher-attendance--id-">
                                <a href="#presencas-PUTapi-v1-teacher-attendance--id-">PUT api/v1/teacher/attendance/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="presencas-DELETEapi-v1-teacher-attendance--id-">
                                <a href="#presencas-DELETEapi-v1-teacher-attendance--id-">DELETE api/v1/teacher/attendance/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-professores" class="tocify-header">
                <li class="tocify-item level-1" data-unique="professores">
                    <a href="#professores">Professores</a>
                </li>
                                    <ul id="tocify-subheader-professores" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="professores-GETapi-v1-teacher-teachers">
                                <a href="#professores-GETapi-v1-teacher-teachers">GET api/v1/teacher/teachers</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="professores-POSTapi-v1-teacher-teachers">
                                <a href="#professores-POSTapi-v1-teacher-teachers">POST api/v1/teacher/teachers</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="professores-GETapi-v1-teacher-teachers--id-">
                                <a href="#professores-GETapi-v1-teacher-teachers--id-">GET api/v1/teacher/teachers/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="professores-PUTapi-v1-teacher-teachers--id-">
                                <a href="#professores-PUTapi-v1-teacher-teachers--id-">PUT api/v1/teacher/teachers/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="professores-DELETEapi-v1-teacher-teachers--id-">
                                <a href="#professores-DELETEapi-v1-teacher-teachers--id-">DELETE api/v1/teacher/teachers/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-questoes-de-atividades" class="tocify-header">
                <li class="tocify-item level-1" data-unique="questoes-de-atividades">
                    <a href="#questoes-de-atividades">Questões de Atividades</a>
                </li>
                                    <ul id="tocify-subheader-questoes-de-atividades" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="questoes-de-atividades-GETapi-v1-teacher-activity-questions">
                                <a href="#questoes-de-atividades-GETapi-v1-teacher-activity-questions">GET api/v1/teacher/activity-questions</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="questoes-de-atividades-POSTapi-v1-teacher-activity-questions">
                                <a href="#questoes-de-atividades-POSTapi-v1-teacher-activity-questions">POST api/v1/teacher/activity-questions</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="questoes-de-atividades-GETapi-v1-teacher-activity-questions--id-">
                                <a href="#questoes-de-atividades-GETapi-v1-teacher-activity-questions--id-">GET api/v1/teacher/activity-questions/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="questoes-de-atividades-PUTapi-v1-teacher-activity-questions--id-">
                                <a href="#questoes-de-atividades-PUTapi-v1-teacher-activity-questions--id-">PUT api/v1/teacher/activity-questions/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="questoes-de-atividades-DELETEapi-v1-teacher-activity-questions--id-">
                                <a href="#questoes-de-atividades-DELETEapi-v1-teacher-activity-questions--id-">DELETE api/v1/teacher/activity-questions/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-respostas-de-forum" class="tocify-header">
                <li class="tocify-item level-1" data-unique="respostas-de-forum">
                    <a href="#respostas-de-forum">Respostas de Fórum</a>
                </li>
                                    <ul id="tocify-subheader-respostas-de-forum" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="respostas-de-forum-GETapi-v1-forum-replies">
                                <a href="#respostas-de-forum-GETapi-v1-forum-replies">GET api/v1/forum-replies</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="respostas-de-forum-POSTapi-v1-forum-replies">
                                <a href="#respostas-de-forum-POSTapi-v1-forum-replies">POST api/v1/forum-replies</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="respostas-de-forum-GETapi-v1-forum-replies--id-">
                                <a href="#respostas-de-forum-GETapi-v1-forum-replies--id-">GET api/v1/forum-replies/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="respostas-de-forum-PUTapi-v1-forum-replies--id-">
                                <a href="#respostas-de-forum-PUTapi-v1-forum-replies--id-">PUT api/v1/forum-replies/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="respostas-de-forum-DELETEapi-v1-forum-replies--id-">
                                <a href="#respostas-de-forum-DELETEapi-v1-forum-replies--id-">DELETE api/v1/forum-replies/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-respostas-de-submissoes" class="tocify-header">
                <li class="tocify-item level-1" data-unique="respostas-de-submissoes">
                    <a href="#respostas-de-submissoes">Respostas de Submissões</a>
                </li>
                                    <ul id="tocify-subheader-respostas-de-submissoes" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="respostas-de-submissoes-GETapi-v1-student-submission-answers">
                                <a href="#respostas-de-submissoes-GETapi-v1-student-submission-answers">GET api/v1/student/submission-answers</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="respostas-de-submissoes-POSTapi-v1-student-submission-answers">
                                <a href="#respostas-de-submissoes-POSTapi-v1-student-submission-answers">POST api/v1/student/submission-answers</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="respostas-de-submissoes-GETapi-v1-student-submission-answers--id-">
                                <a href="#respostas-de-submissoes-GETapi-v1-student-submission-answers--id-">GET api/v1/student/submission-answers/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="respostas-de-submissoes-PUTapi-v1-student-submission-answers--id-">
                                <a href="#respostas-de-submissoes-PUTapi-v1-student-submission-answers--id-">PUT api/v1/student/submission-answers/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="respostas-de-submissoes-DELETEapi-v1-student-submission-answers--id-">
                                <a href="#respostas-de-submissoes-DELETEapi-v1-student-submission-answers--id-">DELETE api/v1/student/submission-answers/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-submissoes" class="tocify-header">
                <li class="tocify-item level-1" data-unique="submissoes">
                    <a href="#submissoes">Submissões</a>
                </li>
                                    <ul id="tocify-subheader-submissoes" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="submissoes-GETapi-v1-student-submissions">
                                <a href="#submissoes-GETapi-v1-student-submissions">GET api/v1/student/submissions</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="submissoes-POSTapi-v1-student-submissions">
                                <a href="#submissoes-POSTapi-v1-student-submissions">POST api/v1/student/submissions</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="submissoes-GETapi-v1-student-submissions--id-">
                                <a href="#submissoes-GETapi-v1-student-submissions--id-">GET api/v1/student/submissions/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="submissoes-PUTapi-v1-student-submissions--id-">
                                <a href="#submissoes-PUTapi-v1-student-submissions--id-">PUT api/v1/student/submissions/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="submissoes-DELETEapi-v1-student-submissions--id-">
                                <a href="#submissoes-DELETEapi-v1-student-submissions--id-">DELETE api/v1/student/submissions/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-turmas" class="tocify-header">
                <li class="tocify-item level-1" data-unique="turmas">
                    <a href="#turmas">Turmas</a>
                </li>
                                    <ul id="tocify-subheader-turmas" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="turmas-GETapi-v1-admin-classes">
                                <a href="#turmas-GETapi-v1-admin-classes">GET api/v1/admin/classes</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="turmas-POSTapi-v1-admin-classes">
                                <a href="#turmas-POSTapi-v1-admin-classes">POST api/v1/admin/classes</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="turmas-GETapi-v1-admin-classes--id-">
                                <a href="#turmas-GETapi-v1-admin-classes--id-">GET api/v1/admin/classes/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="turmas-PUTapi-v1-admin-classes--id-">
                                <a href="#turmas-PUTapi-v1-admin-classes--id-">PUT api/v1/admin/classes/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="turmas-DELETEapi-v1-admin-classes--id-">
                                <a href="#turmas-DELETEapi-v1-admin-classes--id-">DELETE api/v1/admin/classes/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-topicos-de-forum" class="tocify-header">
                <li class="tocify-item level-1" data-unique="topicos-de-forum">
                    <a href="#topicos-de-forum">Tópicos de Fórum</a>
                </li>
                                    <ul id="tocify-subheader-topicos-de-forum" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="topicos-de-forum-GETapi-v1-forum-topics">
                                <a href="#topicos-de-forum-GETapi-v1-forum-topics">GET api/v1/forum-topics</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="topicos-de-forum-POSTapi-v1-forum-topics">
                                <a href="#topicos-de-forum-POSTapi-v1-forum-topics">POST api/v1/forum-topics</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="topicos-de-forum-GETapi-v1-forum-topics--id-">
                                <a href="#topicos-de-forum-GETapi-v1-forum-topics--id-">GET api/v1/forum-topics/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="topicos-de-forum-PUTapi-v1-forum-topics--id-">
                                <a href="#topicos-de-forum-PUTapi-v1-forum-topics--id-">PUT api/v1/forum-topics/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="topicos-de-forum-DELETEapi-v1-forum-topics--id-">
                                <a href="#topicos-de-forum-DELETEapi-v1-forum-topics--id-">DELETE api/v1/forum-topics/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: July 2, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="administradores">Administradores</h1>

    <p>API para gerenciamento de administradores</p>

                                <h2 id="administradores-GETapi-v1-admin-admins">GET api/v1/admin/admins</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-admin-admins">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/admin/admins" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/admins"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-admins">
    </span>
<span id="execution-results-GETapi-v1-admin-admins" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-admins"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-admins"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-admins" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-admins">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-admins" data-method="GET"
      data-path="api/v1/admin/admins"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-admins', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-admins"
                    onclick="tryItOut('GETapi-v1-admin-admins');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-admins"
                    onclick="cancelTryOut('GETapi-v1-admin-admins');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-admins"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/admins</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-admins"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-admins"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="administradores-POSTapi-v1-admin-admins">POST api/v1/admin/admins</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-admin-admins">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/admin/admins" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_id\": 17,
    \"first_name\": \"consequatur\",
    \"last_name\": \"consequatur\",
    \"phone\": \"consequatur\",
    \"role\": \"consequatur\",
    \"permissions\": \"consequatur\",
    \"profile_picture\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/admins"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 17,
    "first_name": "consequatur",
    "last_name": "consequatur",
    "phone": "consequatur",
    "role": "consequatur",
    "permissions": "consequatur",
    "profile_picture": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-admins">
</span>
<span id="execution-results-POSTapi-v1-admin-admins" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-admins"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-admins"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-admins" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-admins">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-admins" data-method="POST"
      data-path="api/v1/admin/admins"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-admins', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-admins"
                    onclick="tryItOut('POSTapi-v1-admin-admins');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-admins"
                    onclick="cancelTryOut('POSTapi-v1-admin-admins');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-admins"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/admins</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-admins"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-admin-admins"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="POSTapi-v1-admin-admins"
               value="17"
               data-component="body">
    <br>
<p>ID do usuário associado Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>first_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="first_name"                data-endpoint="POSTapi-v1-admin-admins"
               value="consequatur"
               data-component="body">
    <br>
<p>Primeiro nome Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="last_name"                data-endpoint="POSTapi-v1-admin-admins"
               value="consequatur"
               data-component="body">
    <br>
<p>Último nome Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-v1-admin-admins"
               value="consequatur"
               data-component="body">
    <br>
<p>Telefone Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>role</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="role"                data-endpoint="POSTapi-v1-admin-admins"
               value="consequatur"
               data-component="body">
    <br>
<p>Papel do administrador Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>permissions</code></b>&nbsp;&nbsp;
<small>json</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="permissions"                data-endpoint="POSTapi-v1-admin-admins"
               value="consequatur"
               data-component="body">
    <br>
<p>Permissões do administrador Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>profile_picture</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="profile_picture"                data-endpoint="POSTapi-v1-admin-admins"
               value="consequatur"
               data-component="body">
    <br>
<p>URL da foto de perfil Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="administradores-GETapi-v1-admin-admins--id-">GET api/v1/admin/admins/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-admin-admins--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/admin/admins/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/admins/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-admins--id-">
    </span>
<span id="execution-results-GETapi-v1-admin-admins--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-admins--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-admins--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-admins--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-admins--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-admins--id-" data-method="GET"
      data-path="api/v1/admin/admins/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-admins--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-admins--id-"
                    onclick="tryItOut('GETapi-v1-admin-admins--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-admins--id-"
                    onclick="cancelTryOut('GETapi-v1-admin-admins--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-admins--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/admins/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-admins--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-admins--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-admin-admins--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the admin. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="administradores-PUTapi-v1-admin-admins--id-">PUT api/v1/admin/admins/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-admin-admins--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/admin/admins/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"first_name\": \"consequatur\",
    \"last_name\": \"consequatur\",
    \"phone\": \"consequatur\",
    \"role\": \"consequatur\",
    \"permissions\": \"consequatur\",
    \"profile_picture\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/admins/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "consequatur",
    "last_name": "consequatur",
    "phone": "consequatur",
    "role": "consequatur",
    "permissions": "consequatur",
    "profile_picture": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-admin-admins--id-">
</span>
<span id="execution-results-PUTapi-v1-admin-admins--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-admin-admins--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-admin-admins--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-admin-admins--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-admin-admins--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-admin-admins--id-" data-method="PUT"
      data-path="api/v1/admin/admins/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-admin-admins--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-admin-admins--id-"
                    onclick="tryItOut('PUTapi-v1-admin-admins--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-admin-admins--id-"
                    onclick="cancelTryOut('PUTapi-v1-admin-admins--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-admin-admins--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/admin/admins/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/admin/admins/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-admin-admins--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-admin-admins--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-admin-admins--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the admin. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>first_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="first_name"                data-endpoint="PUTapi-v1-admin-admins--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Primeiro nome Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="last_name"                data-endpoint="PUTapi-v1-admin-admins--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Último nome Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="PUTapi-v1-admin-admins--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Telefone Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>role</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="role"                data-endpoint="PUTapi-v1-admin-admins--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Papel do administrador Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>permissions</code></b>&nbsp;&nbsp;
<small>json</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="permissions"                data-endpoint="PUTapi-v1-admin-admins--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Permissões do administrador Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>profile_picture</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="profile_picture"                data-endpoint="PUTapi-v1-admin-admins--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>URL da foto de perfil Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="administradores-DELETEapi-v1-admin-admins--id-">DELETE api/v1/admin/admins/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-admin-admins--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/admin/admins/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/admins/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-admin-admins--id-">
</span>
<span id="execution-results-DELETEapi-v1-admin-admins--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-admin-admins--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-admin-admins--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-admin-admins--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-admin-admins--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-admin-admins--id-" data-method="DELETE"
      data-path="api/v1/admin/admins/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-admin-admins--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-admin-admins--id-"
                    onclick="tryItOut('DELETEapi-v1-admin-admins--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-admin-admins--id-"
                    onclick="cancelTryOut('DELETEapi-v1-admin-admins--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-admin-admins--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/admin/admins/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-admin-admins--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-admin-admins--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-admin-admins--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the admin. Example: <code>consequatur</code></p>
            </div>
                    </form>

                <h1 id="atividades">Atividades</h1>

    <p>API para gerenciamento de atividades</p>

                                <h2 id="atividades-GETapi-v1-teacher-activities">GET api/v1/teacher/activities</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-teacher-activities">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/teacher/activities" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/activities"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-teacher-activities">
    </span>
<span id="execution-results-GETapi-v1-teacher-activities" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-teacher-activities"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-teacher-activities"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-teacher-activities" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-teacher-activities">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-teacher-activities" data-method="GET"
      data-path="api/v1/teacher/activities"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-teacher-activities', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-teacher-activities"
                    onclick="tryItOut('GETapi-v1-teacher-activities');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-teacher-activities"
                    onclick="cancelTryOut('GETapi-v1-teacher-activities');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-teacher-activities"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/teacher/activities</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-teacher-activities"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-teacher-activities"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="atividades-POSTapi-v1-teacher-activities">POST api/v1/teacher/activities</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-teacher-activities">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/teacher/activities" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"consequatur\",
    \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\",
    \"type\": \"consequatur\",
    \"teacher_id\": 17,
    \"class_id\": 17,
    \"subject_id\": 17,
    \"total_points\": 11613.31890586,
    \"duration_minutes\": 17,
    \"due_date\": \"consequatur\",
    \"start_date\": \"consequatur\",
    \"instructions\": \"consequatur\",
    \"status\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/activities"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "consequatur",
    "description": "Dolores dolorum amet iste laborum eius est dolor.",
    "type": "consequatur",
    "teacher_id": 17,
    "class_id": 17,
    "subject_id": 17,
    "total_points": 11613.31890586,
    "duration_minutes": 17,
    "due_date": "consequatur",
    "start_date": "consequatur",
    "instructions": "consequatur",
    "status": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-teacher-activities">
</span>
<span id="execution-results-POSTapi-v1-teacher-activities" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-teacher-activities"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-teacher-activities"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-teacher-activities" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-teacher-activities">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-teacher-activities" data-method="POST"
      data-path="api/v1/teacher/activities"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-teacher-activities', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-teacher-activities"
                    onclick="tryItOut('POSTapi-v1-teacher-activities');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-teacher-activities"
                    onclick="cancelTryOut('POSTapi-v1-teacher-activities');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-teacher-activities"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/teacher/activities</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-teacher-activities"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-teacher-activities"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-v1-teacher-activities"
               value="consequatur"
               data-component="body">
    <br>
<p>Título da atividade Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-v1-teacher-activities"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Descrição Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="POSTapi-v1-teacher-activities"
               value="consequatur"
               data-component="body">
    <br>
<p>Tipo (exam/quiz/assignment/project) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>teacher_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="teacher_id"                data-endpoint="POSTapi-v1-teacher-activities"
               value="17"
               data-component="body">
    <br>
<p>ID do professor Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>class_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="class_id"                data-endpoint="POSTapi-v1-teacher-activities"
               value="17"
               data-component="body">
    <br>
<p>ID da turma Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>subject_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="subject_id"                data-endpoint="POSTapi-v1-teacher-activities"
               value="17"
               data-component="body">
    <br>
<p>ID da disciplina Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>total_points</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="total_points"                data-endpoint="POSTapi-v1-teacher-activities"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Total de pontos Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>duration_minutes</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="duration_minutes"                data-endpoint="POSTapi-v1-teacher-activities"
               value="17"
               data-component="body">
    <br>
<p>Duração em minutos Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>due_date</code></b>&nbsp;&nbsp;
<small>datetime</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="due_date"                data-endpoint="POSTapi-v1-teacher-activities"
               value="consequatur"
               data-component="body">
    <br>
<p>Data de entrega Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_date</code></b>&nbsp;&nbsp;
<small>datetime</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="start_date"                data-endpoint="POSTapi-v1-teacher-activities"
               value="consequatur"
               data-component="body">
    <br>
<p>Data de início Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>instructions</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="instructions"                data-endpoint="POSTapi-v1-teacher-activities"
               value="consequatur"
               data-component="body">
    <br>
<p>Instruções Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-v1-teacher-activities"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (draft/published/closed) Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="atividades-GETapi-v1-teacher-activities--id-">GET api/v1/teacher/activities/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-teacher-activities--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/teacher/activities/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/activities/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-teacher-activities--id-">
    </span>
<span id="execution-results-GETapi-v1-teacher-activities--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-teacher-activities--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-teacher-activities--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-teacher-activities--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-teacher-activities--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-teacher-activities--id-" data-method="GET"
      data-path="api/v1/teacher/activities/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-teacher-activities--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-teacher-activities--id-"
                    onclick="tryItOut('GETapi-v1-teacher-activities--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-teacher-activities--id-"
                    onclick="cancelTryOut('GETapi-v1-teacher-activities--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-teacher-activities--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/teacher/activities/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-teacher-activities--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-teacher-activities--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-teacher-activities--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the activity. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="atividades-PUTapi-v1-teacher-activities--id-">PUT api/v1/teacher/activities/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-teacher-activities--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/teacher/activities/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"consequatur\",
    \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\",
    \"type\": \"consequatur\",
    \"teacher_id\": 17,
    \"class_id\": 17,
    \"subject_id\": 17,
    \"total_points\": 11613.31890586,
    \"duration_minutes\": 17,
    \"due_date\": \"consequatur\",
    \"start_date\": \"consequatur\",
    \"instructions\": \"consequatur\",
    \"status\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/activities/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "consequatur",
    "description": "Dolores dolorum amet iste laborum eius est dolor.",
    "type": "consequatur",
    "teacher_id": 17,
    "class_id": 17,
    "subject_id": 17,
    "total_points": 11613.31890586,
    "duration_minutes": 17,
    "due_date": "consequatur",
    "start_date": "consequatur",
    "instructions": "consequatur",
    "status": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-teacher-activities--id-">
</span>
<span id="execution-results-PUTapi-v1-teacher-activities--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-teacher-activities--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-teacher-activities--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-teacher-activities--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-teacher-activities--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-teacher-activities--id-" data-method="PUT"
      data-path="api/v1/teacher/activities/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-teacher-activities--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-teacher-activities--id-"
                    onclick="tryItOut('PUTapi-v1-teacher-activities--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-teacher-activities--id-"
                    onclick="cancelTryOut('PUTapi-v1-teacher-activities--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-teacher-activities--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/teacher/activities/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/teacher/activities/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-teacher-activities--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-teacher-activities--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-teacher-activities--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the activity. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-v1-teacher-activities--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Título da atividade Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-v1-teacher-activities--id-"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Descrição Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="PUTapi-v1-teacher-activities--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Tipo (exam/quiz/assignment/project) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>teacher_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="teacher_id"                data-endpoint="PUTapi-v1-teacher-activities--id-"
               value="17"
               data-component="body">
    <br>
<p>ID do professor Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>class_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="class_id"                data-endpoint="PUTapi-v1-teacher-activities--id-"
               value="17"
               data-component="body">
    <br>
<p>ID da turma Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>subject_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="subject_id"                data-endpoint="PUTapi-v1-teacher-activities--id-"
               value="17"
               data-component="body">
    <br>
<p>ID da disciplina Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>total_points</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="total_points"                data-endpoint="PUTapi-v1-teacher-activities--id-"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Total de pontos Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>duration_minutes</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="duration_minutes"                data-endpoint="PUTapi-v1-teacher-activities--id-"
               value="17"
               data-component="body">
    <br>
<p>Duração em minutos Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>due_date</code></b>&nbsp;&nbsp;
<small>datetime</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="due_date"                data-endpoint="PUTapi-v1-teacher-activities--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Data de entrega Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_date</code></b>&nbsp;&nbsp;
<small>datetime</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="start_date"                data-endpoint="PUTapi-v1-teacher-activities--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Data de início Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>instructions</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="instructions"                data-endpoint="PUTapi-v1-teacher-activities--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Instruções Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-v1-teacher-activities--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (draft/published/closed) Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="atividades-DELETEapi-v1-teacher-activities--id-">DELETE api/v1/teacher/activities/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-teacher-activities--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/teacher/activities/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/activities/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-teacher-activities--id-">
</span>
<span id="execution-results-DELETEapi-v1-teacher-activities--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-teacher-activities--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-teacher-activities--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-teacher-activities--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-teacher-activities--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-teacher-activities--id-" data-method="DELETE"
      data-path="api/v1/teacher/activities/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-teacher-activities--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-teacher-activities--id-"
                    onclick="tryItOut('DELETEapi-v1-teacher-activities--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-teacher-activities--id-"
                    onclick="cancelTryOut('DELETEapi-v1-teacher-activities--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-teacher-activities--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/teacher/activities/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-teacher-activities--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-teacher-activities--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-teacher-activities--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the activity. Example: <code>consequatur</code></p>
            </div>
                    </form>

                <h1 id="atribuicoes-de-professores">Atribuições de Professores</h1>

    <p>API para gerenciamento de atribuições de professores</p>

                                <h2 id="atribuicoes-de-professores-GETapi-v1-teacher-teacher-assignments">GET api/v1/teacher/teacher-assignments</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-teacher-teacher-assignments">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/teacher/teacher-assignments" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/teacher-assignments"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-teacher-teacher-assignments">
    </span>
<span id="execution-results-GETapi-v1-teacher-teacher-assignments" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-teacher-teacher-assignments"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-teacher-teacher-assignments"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-teacher-teacher-assignments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-teacher-teacher-assignments">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-teacher-teacher-assignments" data-method="GET"
      data-path="api/v1/teacher/teacher-assignments"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-teacher-teacher-assignments', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-teacher-teacher-assignments"
                    onclick="tryItOut('GETapi-v1-teacher-teacher-assignments');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-teacher-teacher-assignments"
                    onclick="cancelTryOut('GETapi-v1-teacher-teacher-assignments');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-teacher-teacher-assignments"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/teacher/teacher-assignments</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-teacher-teacher-assignments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-teacher-teacher-assignments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="atribuicoes-de-professores-POSTapi-v1-teacher-teacher-assignments">POST api/v1/teacher/teacher-assignments</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-teacher-teacher-assignments">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/teacher/teacher-assignments" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"teacher_id\": 17,
    \"class_id\": 17,
    \"subject_id\": 17,
    \"academic_year\": \"consequatur\",
    \"status\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/teacher-assignments"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "teacher_id": 17,
    "class_id": 17,
    "subject_id": 17,
    "academic_year": "consequatur",
    "status": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-teacher-teacher-assignments">
</span>
<span id="execution-results-POSTapi-v1-teacher-teacher-assignments" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-teacher-teacher-assignments"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-teacher-teacher-assignments"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-teacher-teacher-assignments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-teacher-teacher-assignments">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-teacher-teacher-assignments" data-method="POST"
      data-path="api/v1/teacher/teacher-assignments"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-teacher-teacher-assignments', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-teacher-teacher-assignments"
                    onclick="tryItOut('POSTapi-v1-teacher-teacher-assignments');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-teacher-teacher-assignments"
                    onclick="cancelTryOut('POSTapi-v1-teacher-teacher-assignments');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-teacher-teacher-assignments"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/teacher/teacher-assignments</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-teacher-teacher-assignments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-teacher-teacher-assignments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>teacher_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="teacher_id"                data-endpoint="POSTapi-v1-teacher-teacher-assignments"
               value="17"
               data-component="body">
    <br>
<p>ID do professor Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>class_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="class_id"                data-endpoint="POSTapi-v1-teacher-teacher-assignments"
               value="17"
               data-component="body">
    <br>
<p>ID da turma Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>subject_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="subject_id"                data-endpoint="POSTapi-v1-teacher-teacher-assignments"
               value="17"
               data-component="body">
    <br>
<p>ID da disciplina Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>academic_year</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="academic_year"                data-endpoint="POSTapi-v1-teacher-teacher-assignments"
               value="consequatur"
               data-component="body">
    <br>
<p>Ano acadêmico (ex: 2024-2025) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-v1-teacher-teacher-assignments"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (active/inactive) Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="atribuicoes-de-professores-GETapi-v1-teacher-teacher-assignments--id-">GET api/v1/teacher/teacher-assignments/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-teacher-teacher-assignments--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/teacher/teacher-assignments/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/teacher-assignments/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-teacher-teacher-assignments--id-">
    </span>
<span id="execution-results-GETapi-v1-teacher-teacher-assignments--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-teacher-teacher-assignments--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-teacher-teacher-assignments--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-teacher-teacher-assignments--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-teacher-teacher-assignments--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-teacher-teacher-assignments--id-" data-method="GET"
      data-path="api/v1/teacher/teacher-assignments/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-teacher-teacher-assignments--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-teacher-teacher-assignments--id-"
                    onclick="tryItOut('GETapi-v1-teacher-teacher-assignments--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-teacher-teacher-assignments--id-"
                    onclick="cancelTryOut('GETapi-v1-teacher-teacher-assignments--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-teacher-teacher-assignments--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/teacher/teacher-assignments/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-teacher-teacher-assignments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-teacher-teacher-assignments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-teacher-teacher-assignments--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the teacher assignment. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="atribuicoes-de-professores-PUTapi-v1-teacher-teacher-assignments--id-">PUT api/v1/teacher/teacher-assignments/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-teacher-teacher-assignments--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/teacher/teacher-assignments/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"teacher_id\": 17,
    \"class_id\": 17,
    \"subject_id\": 17,
    \"academic_year\": \"consequatur\",
    \"status\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/teacher-assignments/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "teacher_id": 17,
    "class_id": 17,
    "subject_id": 17,
    "academic_year": "consequatur",
    "status": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-teacher-teacher-assignments--id-">
</span>
<span id="execution-results-PUTapi-v1-teacher-teacher-assignments--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-teacher-teacher-assignments--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-teacher-teacher-assignments--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-teacher-teacher-assignments--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-teacher-teacher-assignments--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-teacher-teacher-assignments--id-" data-method="PUT"
      data-path="api/v1/teacher/teacher-assignments/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-teacher-teacher-assignments--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-teacher-teacher-assignments--id-"
                    onclick="tryItOut('PUTapi-v1-teacher-teacher-assignments--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-teacher-teacher-assignments--id-"
                    onclick="cancelTryOut('PUTapi-v1-teacher-teacher-assignments--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-teacher-teacher-assignments--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/teacher/teacher-assignments/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/teacher/teacher-assignments/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-teacher-teacher-assignments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-teacher-teacher-assignments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-teacher-teacher-assignments--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the teacher assignment. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>teacher_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="teacher_id"                data-endpoint="PUTapi-v1-teacher-teacher-assignments--id-"
               value="17"
               data-component="body">
    <br>
<p>ID do professor Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>class_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="class_id"                data-endpoint="PUTapi-v1-teacher-teacher-assignments--id-"
               value="17"
               data-component="body">
    <br>
<p>ID da turma Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>subject_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="subject_id"                data-endpoint="PUTapi-v1-teacher-teacher-assignments--id-"
               value="17"
               data-component="body">
    <br>
<p>ID da disciplina Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>academic_year</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="academic_year"                data-endpoint="PUTapi-v1-teacher-teacher-assignments--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Ano acadêmico (ex: 2024-2025) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-v1-teacher-teacher-assignments--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (active/inactive) Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="atribuicoes-de-professores-DELETEapi-v1-teacher-teacher-assignments--id-">DELETE api/v1/teacher/teacher-assignments/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-teacher-teacher-assignments--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/teacher/teacher-assignments/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/teacher-assignments/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-teacher-teacher-assignments--id-">
</span>
<span id="execution-results-DELETEapi-v1-teacher-teacher-assignments--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-teacher-teacher-assignments--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-teacher-teacher-assignments--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-teacher-teacher-assignments--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-teacher-teacher-assignments--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-teacher-teacher-assignments--id-" data-method="DELETE"
      data-path="api/v1/teacher/teacher-assignments/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-teacher-teacher-assignments--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-teacher-teacher-assignments--id-"
                    onclick="tryItOut('DELETEapi-v1-teacher-teacher-assignments--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-teacher-teacher-assignments--id-"
                    onclick="cancelTryOut('DELETEapi-v1-teacher-teacher-assignments--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-teacher-teacher-assignments--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/teacher/teacher-assignments/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-teacher-teacher-assignments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-teacher-teacher-assignments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-teacher-teacher-assignments--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the teacher assignment. Example: <code>consequatur</code></p>
            </div>
                    </form>

                <h1 id="autenticacao">Autenticação</h1>

    <p>API para autenticação de usuários</p>

                                <h2 id="autenticacao-POSTapi-v1-login">POST api/v1/login</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"qkunze@example.com\",
    \"password\": \"O[2UZ5ij-e\\/dl4m{o,\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "qkunze@example.com",
    "password": "O[2UZ5ij-e\/dl4m{o,"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-login">
</span>
<span id="execution-results-POSTapi-v1-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-login" data-method="POST"
      data-path="api/v1/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-login"
                    onclick="tryItOut('POSTapi-v1-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-login"
                    onclick="cancelTryOut('POSTapi-v1-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-v1-login"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Email do usuário Example: <code>qkunze@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-login"
               value="O[2UZ5ij-e/dl4m{o,"
               data-component="body">
    <br>
<p>Senha do usuário Example: <code>O[2UZ5ij-e/dl4m{o,</code></p>
        </div>
        </form>

                    <h2 id="autenticacao-POSTapi-v1-logout">POST api/v1/logout</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-logout">
</span>
<span id="execution-results-POSTapi-v1-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-logout" data-method="POST"
      data-path="api/v1/logout"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-logout"
                    onclick="tryItOut('POSTapi-v1-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-logout"
                    onclick="cancelTryOut('POSTapi-v1-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="categorias-de-forum">Categorias de Fórum</h1>

    <p>API para gerenciamento de categorias de fórum</p>

                                <h2 id="categorias-de-forum-GETapi-v1-admin-forum-categories">GET api/v1/admin/forum-categories</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-admin-forum-categories">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/admin/forum-categories" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/forum-categories"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-forum-categories">
    </span>
<span id="execution-results-GETapi-v1-admin-forum-categories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-forum-categories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-forum-categories"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-forum-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-forum-categories">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-forum-categories" data-method="GET"
      data-path="api/v1/admin/forum-categories"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-forum-categories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-forum-categories"
                    onclick="tryItOut('GETapi-v1-admin-forum-categories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-forum-categories"
                    onclick="cancelTryOut('GETapi-v1-admin-forum-categories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-forum-categories"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/forum-categories</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-forum-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-forum-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="categorias-de-forum-POSTapi-v1-admin-forum-categories">POST api/v1/admin/forum-categories</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-admin-forum-categories">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/admin/forum-categories" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"consequatur\",
    \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\",
    \"status\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/forum-categories"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "consequatur",
    "description": "Dolores dolorum amet iste laborum eius est dolor.",
    "status": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-forum-categories">
</span>
<span id="execution-results-POSTapi-v1-admin-forum-categories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-forum-categories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-forum-categories"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-forum-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-forum-categories">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-forum-categories" data-method="POST"
      data-path="api/v1/admin/forum-categories"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-forum-categories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-forum-categories"
                    onclick="tryItOut('POSTapi-v1-admin-forum-categories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-forum-categories"
                    onclick="cancelTryOut('POSTapi-v1-admin-forum-categories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-forum-categories"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/forum-categories</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-forum-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-admin-forum-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-v1-admin-forum-categories"
               value="consequatur"
               data-component="body">
    <br>
<p>Nome da categoria Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-v1-admin-forum-categories"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Descrição Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-v1-admin-forum-categories"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (active/inactive) Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="categorias-de-forum-GETapi-v1-admin-forum-categories--id-">GET api/v1/admin/forum-categories/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-admin-forum-categories--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/admin/forum-categories/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/forum-categories/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-forum-categories--id-">
    </span>
<span id="execution-results-GETapi-v1-admin-forum-categories--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-forum-categories--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-forum-categories--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-forum-categories--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-forum-categories--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-forum-categories--id-" data-method="GET"
      data-path="api/v1/admin/forum-categories/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-forum-categories--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-forum-categories--id-"
                    onclick="tryItOut('GETapi-v1-admin-forum-categories--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-forum-categories--id-"
                    onclick="cancelTryOut('GETapi-v1-admin-forum-categories--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-forum-categories--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/forum-categories/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-forum-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-forum-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-admin-forum-categories--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the forum category. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="categorias-de-forum-PUTapi-v1-admin-forum-categories--id-">PUT api/v1/admin/forum-categories/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-admin-forum-categories--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/admin/forum-categories/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"consequatur\",
    \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\",
    \"status\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/forum-categories/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "consequatur",
    "description": "Dolores dolorum amet iste laborum eius est dolor.",
    "status": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-admin-forum-categories--id-">
</span>
<span id="execution-results-PUTapi-v1-admin-forum-categories--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-admin-forum-categories--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-admin-forum-categories--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-admin-forum-categories--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-admin-forum-categories--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-admin-forum-categories--id-" data-method="PUT"
      data-path="api/v1/admin/forum-categories/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-admin-forum-categories--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-admin-forum-categories--id-"
                    onclick="tryItOut('PUTapi-v1-admin-forum-categories--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-admin-forum-categories--id-"
                    onclick="cancelTryOut('PUTapi-v1-admin-forum-categories--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-admin-forum-categories--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/admin/forum-categories/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/admin/forum-categories/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-admin-forum-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-admin-forum-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-admin-forum-categories--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the forum category. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-v1-admin-forum-categories--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Nome da categoria Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-v1-admin-forum-categories--id-"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Descrição Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-v1-admin-forum-categories--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (active/inactive) Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="categorias-de-forum-DELETEapi-v1-admin-forum-categories--id-">DELETE api/v1/admin/forum-categories/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-admin-forum-categories--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/admin/forum-categories/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/forum-categories/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-admin-forum-categories--id-">
</span>
<span id="execution-results-DELETEapi-v1-admin-forum-categories--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-admin-forum-categories--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-admin-forum-categories--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-admin-forum-categories--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-admin-forum-categories--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-admin-forum-categories--id-" data-method="DELETE"
      data-path="api/v1/admin/forum-categories/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-admin-forum-categories--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-admin-forum-categories--id-"
                    onclick="tryItOut('DELETEapi-v1-admin-forum-categories--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-admin-forum-categories--id-"
                    onclick="cancelTryOut('DELETEapi-v1-admin-forum-categories--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-admin-forum-categories--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/admin/forum-categories/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-admin-forum-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-admin-forum-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-admin-forum-categories--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the forum category. Example: <code>consequatur</code></p>
            </div>
                    </form>

                <h1 id="configuracoes-do-sistema">Configurações do Sistema</h1>

    <p>API para gerenciamento de configurações do sistema</p>

                                <h2 id="configuracoes-do-sistema-GETapi-v1-admin-system-settings">GET api/v1/admin/system-settings</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-admin-system-settings">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/admin/system-settings" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/system-settings"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-system-settings">
    </span>
<span id="execution-results-GETapi-v1-admin-system-settings" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-system-settings"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-system-settings"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-system-settings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-system-settings">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-system-settings" data-method="GET"
      data-path="api/v1/admin/system-settings"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-system-settings', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-system-settings"
                    onclick="tryItOut('GETapi-v1-admin-system-settings');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-system-settings"
                    onclick="cancelTryOut('GETapi-v1-admin-system-settings');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-system-settings"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/system-settings</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-system-settings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-system-settings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="configuracoes-do-sistema-POSTapi-v1-admin-system-settings">POST api/v1/admin/system-settings</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-admin-system-settings">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/admin/system-settings" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"setting_key\": \"consequatur\",
    \"setting_value\": \"consequatur\",
    \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/system-settings"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "setting_key": "consequatur",
    "setting_value": "consequatur",
    "description": "Dolores dolorum amet iste laborum eius est dolor."
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-system-settings">
</span>
<span id="execution-results-POSTapi-v1-admin-system-settings" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-system-settings"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-system-settings"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-system-settings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-system-settings">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-system-settings" data-method="POST"
      data-path="api/v1/admin/system-settings"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-system-settings', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-system-settings"
                    onclick="tryItOut('POSTapi-v1-admin-system-settings');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-system-settings"
                    onclick="cancelTryOut('POSTapi-v1-admin-system-settings');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-system-settings"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/system-settings</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-system-settings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-admin-system-settings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>setting_key</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="setting_key"                data-endpoint="POSTapi-v1-admin-system-settings"
               value="consequatur"
               data-component="body">
    <br>
<p>Chave da configuração Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>setting_value</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="setting_value"                data-endpoint="POSTapi-v1-admin-system-settings"
               value="consequatur"
               data-component="body">
    <br>
<p>Valor da configuração Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-v1-admin-system-settings"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Descrição Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
        </div>
        </form>

                    <h2 id="configuracoes-do-sistema-GETapi-v1-admin-system-settings--id-">GET api/v1/admin/system-settings/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-admin-system-settings--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/admin/system-settings/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/system-settings/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-system-settings--id-">
    </span>
<span id="execution-results-GETapi-v1-admin-system-settings--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-system-settings--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-system-settings--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-system-settings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-system-settings--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-system-settings--id-" data-method="GET"
      data-path="api/v1/admin/system-settings/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-system-settings--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-system-settings--id-"
                    onclick="tryItOut('GETapi-v1-admin-system-settings--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-system-settings--id-"
                    onclick="cancelTryOut('GETapi-v1-admin-system-settings--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-system-settings--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/system-settings/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-system-settings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-system-settings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-admin-system-settings--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the system setting. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="configuracoes-do-sistema-PUTapi-v1-admin-system-settings--id-">PUT api/v1/admin/system-settings/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-admin-system-settings--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/admin/system-settings/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"setting_key\": \"consequatur\",
    \"setting_value\": \"consequatur\",
    \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/system-settings/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "setting_key": "consequatur",
    "setting_value": "consequatur",
    "description": "Dolores dolorum amet iste laborum eius est dolor."
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-admin-system-settings--id-">
</span>
<span id="execution-results-PUTapi-v1-admin-system-settings--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-admin-system-settings--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-admin-system-settings--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-admin-system-settings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-admin-system-settings--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-admin-system-settings--id-" data-method="PUT"
      data-path="api/v1/admin/system-settings/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-admin-system-settings--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-admin-system-settings--id-"
                    onclick="tryItOut('PUTapi-v1-admin-system-settings--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-admin-system-settings--id-"
                    onclick="cancelTryOut('PUTapi-v1-admin-system-settings--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-admin-system-settings--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/admin/system-settings/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/admin/system-settings/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-admin-system-settings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-admin-system-settings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-admin-system-settings--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the system setting. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>setting_key</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="setting_key"                data-endpoint="PUTapi-v1-admin-system-settings--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Chave da configuração Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>setting_value</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="setting_value"                data-endpoint="PUTapi-v1-admin-system-settings--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Valor da configuração Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-v1-admin-system-settings--id-"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Descrição Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
        </div>
        </form>

                    <h2 id="configuracoes-do-sistema-DELETEapi-v1-admin-system-settings--id-">DELETE api/v1/admin/system-settings/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-admin-system-settings--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/admin/system-settings/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/system-settings/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-admin-system-settings--id-">
</span>
<span id="execution-results-DELETEapi-v1-admin-system-settings--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-admin-system-settings--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-admin-system-settings--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-admin-system-settings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-admin-system-settings--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-admin-system-settings--id-" data-method="DELETE"
      data-path="api/v1/admin/system-settings/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-admin-system-settings--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-admin-system-settings--id-"
                    onclick="tryItOut('DELETEapi-v1-admin-system-settings--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-admin-system-settings--id-"
                    onclick="cancelTryOut('DELETEapi-v1-admin-system-settings--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-admin-system-settings--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/admin/system-settings/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-admin-system-settings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-admin-system-settings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-admin-system-settings--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the system setting. Example: <code>consequatur</code></p>
            </div>
                    </form>

                <h1 id="disciplinas">Disciplinas</h1>

    <p>API para gerenciamento de disciplinas</p>

                                <h2 id="disciplinas-GETapi-v1-admin-subjects">GET api/v1/admin/subjects</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-admin-subjects">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/admin/subjects" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/subjects"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-subjects">
    </span>
<span id="execution-results-GETapi-v1-admin-subjects" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-subjects"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-subjects"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-subjects" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-subjects">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-subjects" data-method="GET"
      data-path="api/v1/admin/subjects"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-subjects', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-subjects"
                    onclick="tryItOut('GETapi-v1-admin-subjects');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-subjects"
                    onclick="cancelTryOut('GETapi-v1-admin-subjects');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-subjects"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/subjects</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-subjects"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-subjects"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="disciplinas-POSTapi-v1-admin-subjects">POST api/v1/admin/subjects</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-admin-subjects">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/admin/subjects" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"consequatur\",
    \"code\": \"consequatur\",
    \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\",
    \"credits\": 17,
    \"category\": \"consequatur\",
    \"status\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/subjects"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "consequatur",
    "code": "consequatur",
    "description": "Dolores dolorum amet iste laborum eius est dolor.",
    "credits": 17,
    "category": "consequatur",
    "status": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-subjects">
</span>
<span id="execution-results-POSTapi-v1-admin-subjects" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-subjects"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-subjects"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-subjects" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-subjects">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-subjects" data-method="POST"
      data-path="api/v1/admin/subjects"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-subjects', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-subjects"
                    onclick="tryItOut('POSTapi-v1-admin-subjects');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-subjects"
                    onclick="cancelTryOut('POSTapi-v1-admin-subjects');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-subjects"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/subjects</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-subjects"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-admin-subjects"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-v1-admin-subjects"
               value="consequatur"
               data-component="body">
    <br>
<p>Nome da disciplina Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="code"                data-endpoint="POSTapi-v1-admin-subjects"
               value="consequatur"
               data-component="body">
    <br>
<p>Código único da disciplina Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-v1-admin-subjects"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Descrição Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>credits</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="credits"                data-endpoint="POSTapi-v1-admin-subjects"
               value="17"
               data-component="body">
    <br>
<p>Créditos Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="category"                data-endpoint="POSTapi-v1-admin-subjects"
               value="consequatur"
               data-component="body">
    <br>
<p>Categoria Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-v1-admin-subjects"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (active/inactive) Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="disciplinas-GETapi-v1-admin-subjects--id-">GET api/v1/admin/subjects/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-admin-subjects--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/admin/subjects/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/subjects/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-subjects--id-">
    </span>
<span id="execution-results-GETapi-v1-admin-subjects--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-subjects--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-subjects--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-subjects--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-subjects--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-subjects--id-" data-method="GET"
      data-path="api/v1/admin/subjects/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-subjects--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-subjects--id-"
                    onclick="tryItOut('GETapi-v1-admin-subjects--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-subjects--id-"
                    onclick="cancelTryOut('GETapi-v1-admin-subjects--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-subjects--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/subjects/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-subjects--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-subjects--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-admin-subjects--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the subject. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="disciplinas-PUTapi-v1-admin-subjects--id-">PUT api/v1/admin/subjects/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-admin-subjects--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/admin/subjects/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"consequatur\",
    \"code\": \"consequatur\",
    \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\",
    \"credits\": 17,
    \"category\": \"consequatur\",
    \"status\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/subjects/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "consequatur",
    "code": "consequatur",
    "description": "Dolores dolorum amet iste laborum eius est dolor.",
    "credits": 17,
    "category": "consequatur",
    "status": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-admin-subjects--id-">
</span>
<span id="execution-results-PUTapi-v1-admin-subjects--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-admin-subjects--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-admin-subjects--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-admin-subjects--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-admin-subjects--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-admin-subjects--id-" data-method="PUT"
      data-path="api/v1/admin/subjects/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-admin-subjects--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-admin-subjects--id-"
                    onclick="tryItOut('PUTapi-v1-admin-subjects--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-admin-subjects--id-"
                    onclick="cancelTryOut('PUTapi-v1-admin-subjects--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-admin-subjects--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/admin/subjects/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/admin/subjects/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-admin-subjects--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-admin-subjects--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-admin-subjects--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the subject. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-v1-admin-subjects--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Nome da disciplina Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="code"                data-endpoint="PUTapi-v1-admin-subjects--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Código único da disciplina Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-v1-admin-subjects--id-"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Descrição Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>credits</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="credits"                data-endpoint="PUTapi-v1-admin-subjects--id-"
               value="17"
               data-component="body">
    <br>
<p>Créditos Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="category"                data-endpoint="PUTapi-v1-admin-subjects--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Categoria Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-v1-admin-subjects--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (active/inactive) Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="disciplinas-DELETEapi-v1-admin-subjects--id-">DELETE api/v1/admin/subjects/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-admin-subjects--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/admin/subjects/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/subjects/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-admin-subjects--id-">
</span>
<span id="execution-results-DELETEapi-v1-admin-subjects--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-admin-subjects--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-admin-subjects--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-admin-subjects--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-admin-subjects--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-admin-subjects--id-" data-method="DELETE"
      data-path="api/v1/admin/subjects/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-admin-subjects--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-admin-subjects--id-"
                    onclick="tryItOut('DELETEapi-v1-admin-subjects--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-admin-subjects--id-"
                    onclick="cancelTryOut('DELETEapi-v1-admin-subjects--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-admin-subjects--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/admin/subjects/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-admin-subjects--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-admin-subjects--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-admin-subjects--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the subject. Example: <code>consequatur</code></p>
            </div>
                    </form>

                <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-documentation">Handles the API request and renders the Swagger documentation view.</h2>

<p>
</p>



<span id="example-requests-GETapi-documentation">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/documentation" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/documentation"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-documentation">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: http://localhost:3000
access-control-allow-credentials: true
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-documentation" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-documentation"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-documentation"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-documentation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-documentation">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-documentation" data-method="GET"
      data-path="api/documentation"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-documentation', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-documentation"
                    onclick="tryItOut('GETapi-documentation');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-documentation"
                    onclick="cancelTryOut('GETapi-documentation');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-documentation"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/documentation</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-documentation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-documentation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-oauth2-callback">Handles the OAuth2 callback and retrieves the required file for the redirect.</h2>

<p>
</p>



<span id="example-requests-GETapi-oauth2-callback">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/oauth2-callback" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/oauth2-callback"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-oauth2-callback">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
access-control-allow-origin: http://localhost:3000
access-control-allow-credentials: true
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!doctype html&gt;
&lt;html lang=&quot;en-US&quot;&gt;
&lt;head&gt;
    &lt;title&gt;Swagger UI: OAuth2 Redirect&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;script&gt;
    &#039;use strict&#039;;
    function run () {
        var oauth2 = window.opener.swaggerUIRedirectOauth2;
        var sentState = oauth2.state;
        var redirectUrl = oauth2.redirectUrl;
        var isValid, qp, arr;

        if (/code|token|error/.test(window.location.hash)) {
            qp = window.location.hash.substring(1).replace(&#039;?&#039;, &#039;&amp;&#039;);
        } else {
            qp = location.search.substring(1);
        }

        arr = qp.split(&quot;&amp;&quot;);
        arr.forEach(function (v,i,_arr) { _arr[i] = &#039;&quot;&#039; + v.replace(&#039;=&#039;, &#039;&quot;:&quot;&#039;) + &#039;&quot;&#039;;});
        qp = qp ? JSON.parse(&#039;{&#039; + arr.join() + &#039;}&#039;,
                function (key, value) {
                    return key === &quot;&quot; ? value : decodeURIComponent(value);
                }
        ) : {};

        isValid = qp.state === sentState;

        if ((
          oauth2.auth.schema.get(&quot;flow&quot;) === &quot;accessCode&quot; ||
          oauth2.auth.schema.get(&quot;flow&quot;) === &quot;authorizationCode&quot; ||
          oauth2.auth.schema.get(&quot;flow&quot;) === &quot;authorization_code&quot;
        ) &amp;&amp; !oauth2.auth.code) {
            if (!isValid) {
                oauth2.errCb({
                    authId: oauth2.auth.name,
                    source: &quot;auth&quot;,
                    level: &quot;warning&quot;,
                    message: &quot;Authorization may be unsafe, passed state was changed in server. The passed state wasn&#039;t returned from auth server.&quot;
                });
            }

            if (qp.code) {
                delete oauth2.state;
                oauth2.auth.code = qp.code;
                oauth2.callback({auth: oauth2.auth, redirectUrl: redirectUrl});
            } else {
                let oauthErrorMsg;
                if (qp.error) {
                    oauthErrorMsg = &quot;[&quot;+qp.error+&quot;]: &quot; +
                        (qp.error_description ? qp.error_description+ &quot;. &quot; : &quot;no accessCode received from the server. &quot;) +
                        (qp.error_uri ? &quot;More info: &quot;+qp.error_uri : &quot;&quot;);
                }

                oauth2.errCb({
                    authId: oauth2.auth.name,
                    source: &quot;auth&quot;,
                    level: &quot;error&quot;,
                    message: oauthErrorMsg || &quot;[Authorization failed]: no accessCode received from the server.&quot;
                });
            }
        } else {
            oauth2.callback({auth: oauth2.auth, token: qp, isValid: isValid, redirectUrl: redirectUrl});
        }
        window.close();
    }

    if (document.readyState !== &#039;loading&#039;) {
        run();
    } else {
        document.addEventListener(&#039;DOMContentLoaded&#039;, function () {
            run();
        });
    }
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETapi-oauth2-callback" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-oauth2-callback"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-oauth2-callback"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-oauth2-callback" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-oauth2-callback">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-oauth2-callback" data-method="GET"
      data-path="api/oauth2-callback"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-oauth2-callback', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-oauth2-callback"
                    onclick="tryItOut('GETapi-oauth2-callback');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-oauth2-callback"
                    onclick="cancelTryOut('GETapi-oauth2-callback');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-oauth2-callback"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/oauth2-callback</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-oauth2-callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-oauth2-callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-teste">GET api/teste</h2>

<p>
</p>



<span id="example-requests-GETapi-teste">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/teste" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/teste"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-teste">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
access-control-allow-origin: http://localhost:3000
access-control-allow-credentials: true
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-teste" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-teste"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-teste"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-teste" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-teste">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-teste" data-method="GET"
      data-path="api/teste"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-teste', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-teste"
                    onclick="tryItOut('GETapi-teste');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-teste"
                    onclick="cancelTryOut('GETapi-teste');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-teste"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/teste</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-teste"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-teste"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="escolas">Escolas</h1>

    <p>API para gerenciamento de escolas</p>

                                <h2 id="escolas-GETapi-v1-admin-schools">GET api/v1/admin/schools</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-admin-schools">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/admin/schools" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/schools"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-schools">
    </span>
<span id="execution-results-GETapi-v1-admin-schools" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-schools"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-schools"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-schools" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-schools">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-schools" data-method="GET"
      data-path="api/v1/admin/schools"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-schools', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-schools"
                    onclick="tryItOut('GETapi-v1-admin-schools');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-schools"
                    onclick="cancelTryOut('GETapi-v1-admin-schools');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-schools"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/schools</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-schools"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-schools"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="escolas-POSTapi-v1-admin-schools">POST api/v1/admin/schools</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-admin-schools">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/admin/schools" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"consequatur\",
    \"code\": \"consequatur\",
    \"address\": \"consequatur\",
    \"phone\": \"consequatur\",
    \"email\": \"qkunze@example.com\",
    \"principal_name\": \"consequatur\",
    \"established_date\": \"consequatur\",
    \"status\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/schools"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "consequatur",
    "code": "consequatur",
    "address": "consequatur",
    "phone": "consequatur",
    "email": "qkunze@example.com",
    "principal_name": "consequatur",
    "established_date": "consequatur",
    "status": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-schools">
</span>
<span id="execution-results-POSTapi-v1-admin-schools" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-schools"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-schools"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-schools" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-schools">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-schools" data-method="POST"
      data-path="api/v1/admin/schools"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-schools', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-schools"
                    onclick="tryItOut('POSTapi-v1-admin-schools');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-schools"
                    onclick="cancelTryOut('POSTapi-v1-admin-schools');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-schools"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/schools</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-schools"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-admin-schools"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-v1-admin-schools"
               value="consequatur"
               data-component="body">
    <br>
<p>Nome da escola Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="code"                data-endpoint="POSTapi-v1-admin-schools"
               value="consequatur"
               data-component="body">
    <br>
<p>Código único da escola Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="address"                data-endpoint="POSTapi-v1-admin-schools"
               value="consequatur"
               data-component="body">
    <br>
<p>Endereço Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-v1-admin-schools"
               value="consequatur"
               data-component="body">
    <br>
<p>Telefone Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-v1-admin-schools"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Email Example: <code>qkunze@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>principal_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="principal_name"                data-endpoint="POSTapi-v1-admin-schools"
               value="consequatur"
               data-component="body">
    <br>
<p>Nome do diretor Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>established_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="established_date"                data-endpoint="POSTapi-v1-admin-schools"
               value="consequatur"
               data-component="body">
    <br>
<p>Data de fundação Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-v1-admin-schools"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (active/inactive) Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="escolas-GETapi-v1-admin-schools--id-">GET api/v1/admin/schools/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-admin-schools--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/admin/schools/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/schools/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-schools--id-">
    </span>
<span id="execution-results-GETapi-v1-admin-schools--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-schools--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-schools--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-schools--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-schools--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-schools--id-" data-method="GET"
      data-path="api/v1/admin/schools/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-schools--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-schools--id-"
                    onclick="tryItOut('GETapi-v1-admin-schools--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-schools--id-"
                    onclick="cancelTryOut('GETapi-v1-admin-schools--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-schools--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/schools/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-schools--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-schools--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-admin-schools--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the school. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="escolas-PUTapi-v1-admin-schools--id-">PUT api/v1/admin/schools/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-admin-schools--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/admin/schools/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"consequatur\",
    \"code\": \"consequatur\",
    \"address\": \"consequatur\",
    \"phone\": \"consequatur\",
    \"email\": \"qkunze@example.com\",
    \"principal_name\": \"consequatur\",
    \"established_date\": \"consequatur\",
    \"status\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/schools/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "consequatur",
    "code": "consequatur",
    "address": "consequatur",
    "phone": "consequatur",
    "email": "qkunze@example.com",
    "principal_name": "consequatur",
    "established_date": "consequatur",
    "status": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-admin-schools--id-">
</span>
<span id="execution-results-PUTapi-v1-admin-schools--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-admin-schools--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-admin-schools--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-admin-schools--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-admin-schools--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-admin-schools--id-" data-method="PUT"
      data-path="api/v1/admin/schools/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-admin-schools--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-admin-schools--id-"
                    onclick="tryItOut('PUTapi-v1-admin-schools--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-admin-schools--id-"
                    onclick="cancelTryOut('PUTapi-v1-admin-schools--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-admin-schools--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/admin/schools/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/admin/schools/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-admin-schools--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-admin-schools--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-admin-schools--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the school. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-v1-admin-schools--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Nome da escola Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="code"                data-endpoint="PUTapi-v1-admin-schools--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Código único da escola Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="address"                data-endpoint="PUTapi-v1-admin-schools--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Endereço Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="PUTapi-v1-admin-schools--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Telefone Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="PUTapi-v1-admin-schools--id-"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Email Example: <code>qkunze@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>principal_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="principal_name"                data-endpoint="PUTapi-v1-admin-schools--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Nome do diretor Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>established_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="established_date"                data-endpoint="PUTapi-v1-admin-schools--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Data de fundação Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-v1-admin-schools--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (active/inactive) Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="escolas-DELETEapi-v1-admin-schools--id-">DELETE api/v1/admin/schools/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-admin-schools--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/admin/schools/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/schools/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-admin-schools--id-">
</span>
<span id="execution-results-DELETEapi-v1-admin-schools--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-admin-schools--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-admin-schools--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-admin-schools--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-admin-schools--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-admin-schools--id-" data-method="DELETE"
      data-path="api/v1/admin/schools/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-admin-schools--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-admin-schools--id-"
                    onclick="tryItOut('DELETEapi-v1-admin-schools--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-admin-schools--id-"
                    onclick="cancelTryOut('DELETEapi-v1-admin-schools--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-admin-schools--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/admin/schools/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-admin-schools--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-admin-schools--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-admin-schools--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the school. Example: <code>consequatur</code></p>
            </div>
                    </form>

                <h1 id="estudantes">Estudantes</h1>

    <p>API para gerenciamento de estudantes</p>

                                <h2 id="estudantes-GETapi-v1-student-students">GET api/v1/student/students</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-student-students">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/student/students" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/students"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-student-students">
    </span>
<span id="execution-results-GETapi-v1-student-students" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-student-students"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-student-students"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-student-students" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-student-students">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-student-students" data-method="GET"
      data-path="api/v1/student/students"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-student-students', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-student-students"
                    onclick="tryItOut('GETapi-v1-student-students');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-student-students"
                    onclick="cancelTryOut('GETapi-v1-student-students');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-student-students"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/student/students</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-student-students"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-student-students"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="estudantes-POSTapi-v1-student-students">POST api/v1/student/students</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-student-students">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/student/students" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_id\": 17,
    \"student_number\": \"consequatur\",
    \"first_name\": \"consequatur\",
    \"last_name\": \"consequatur\",
    \"date_of_birth\": \"consequatur\",
    \"gender\": \"consequatur\",
    \"phone\": \"consequatur\",
    \"address\": \"consequatur\",
    \"enrollment_date\": \"consequatur\",
    \"parent_name\": \"consequatur\",
    \"parent_phone\": \"consequatur\",
    \"parent_email\": \"qkunze@example.com\",
    \"emergency_contact\": \"consequatur\",
    \"emergency_phone\": \"consequatur\",
    \"profile_picture\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/students"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 17,
    "student_number": "consequatur",
    "first_name": "consequatur",
    "last_name": "consequatur",
    "date_of_birth": "consequatur",
    "gender": "consequatur",
    "phone": "consequatur",
    "address": "consequatur",
    "enrollment_date": "consequatur",
    "parent_name": "consequatur",
    "parent_phone": "consequatur",
    "parent_email": "qkunze@example.com",
    "emergency_contact": "consequatur",
    "emergency_phone": "consequatur",
    "profile_picture": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-student-students">
</span>
<span id="execution-results-POSTapi-v1-student-students" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-student-students"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-student-students"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-student-students" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-student-students">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-student-students" data-method="POST"
      data-path="api/v1/student/students"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-student-students', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-student-students"
                    onclick="tryItOut('POSTapi-v1-student-students');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-student-students"
                    onclick="cancelTryOut('POSTapi-v1-student-students');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-student-students"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/student/students</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-student-students"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-student-students"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="POSTapi-v1-student-students"
               value="17"
               data-component="body">
    <br>
<p>ID do usuário associado Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>student_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="student_number"                data-endpoint="POSTapi-v1-student-students"
               value="consequatur"
               data-component="body">
    <br>
<p>Número do estudante Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>first_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="first_name"                data-endpoint="POSTapi-v1-student-students"
               value="consequatur"
               data-component="body">
    <br>
<p>Primeiro nome Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="last_name"                data-endpoint="POSTapi-v1-student-students"
               value="consequatur"
               data-component="body">
    <br>
<p>Último nome Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>date_of_birth</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="date_of_birth"                data-endpoint="POSTapi-v1-student-students"
               value="consequatur"
               data-component="body">
    <br>
<p>Data de nascimento Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>gender</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="gender"                data-endpoint="POSTapi-v1-student-students"
               value="consequatur"
               data-component="body">
    <br>
<p>Gênero (M/F) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-v1-student-students"
               value="consequatur"
               data-component="body">
    <br>
<p>Telefone Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="address"                data-endpoint="POSTapi-v1-student-students"
               value="consequatur"
               data-component="body">
    <br>
<p>Endereço Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>enrollment_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="enrollment_date"                data-endpoint="POSTapi-v1-student-students"
               value="consequatur"
               data-component="body">
    <br>
<p>Data de matrícula Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>parent_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="parent_name"                data-endpoint="POSTapi-v1-student-students"
               value="consequatur"
               data-component="body">
    <br>
<p>Nome do responsável Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>parent_phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="parent_phone"                data-endpoint="POSTapi-v1-student-students"
               value="consequatur"
               data-component="body">
    <br>
<p>Telefone do responsável Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>parent_email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="parent_email"                data-endpoint="POSTapi-v1-student-students"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Email do responsável Example: <code>qkunze@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>emergency_contact</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="emergency_contact"                data-endpoint="POSTapi-v1-student-students"
               value="consequatur"
               data-component="body">
    <br>
<p>Contato de emergência Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>emergency_phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="emergency_phone"                data-endpoint="POSTapi-v1-student-students"
               value="consequatur"
               data-component="body">
    <br>
<p>Telefone de emergência Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>profile_picture</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="profile_picture"                data-endpoint="POSTapi-v1-student-students"
               value="consequatur"
               data-component="body">
    <br>
<p>URL da foto de perfil Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="estudantes-GETapi-v1-student-students--id-">GET api/v1/student/students/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-student-students--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/student/students/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/students/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-student-students--id-">
    </span>
<span id="execution-results-GETapi-v1-student-students--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-student-students--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-student-students--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-student-students--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-student-students--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-student-students--id-" data-method="GET"
      data-path="api/v1/student/students/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-student-students--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-student-students--id-"
                    onclick="tryItOut('GETapi-v1-student-students--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-student-students--id-"
                    onclick="cancelTryOut('GETapi-v1-student-students--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-student-students--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/student/students/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-student-students--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-student-students--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-student-students--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the student. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="estudantes-PUTapi-v1-student-students--id-">PUT api/v1/student/students/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-student-students--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/student/students/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"student_number\": \"consequatur\",
    \"first_name\": \"consequatur\",
    \"last_name\": \"consequatur\",
    \"date_of_birth\": \"consequatur\",
    \"gender\": \"consequatur\",
    \"phone\": \"consequatur\",
    \"address\": \"consequatur\",
    \"enrollment_date\": \"consequatur\",
    \"parent_name\": \"consequatur\",
    \"parent_phone\": \"consequatur\",
    \"parent_email\": \"qkunze@example.com\",
    \"emergency_contact\": \"consequatur\",
    \"emergency_phone\": \"consequatur\",
    \"profile_picture\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/students/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "student_number": "consequatur",
    "first_name": "consequatur",
    "last_name": "consequatur",
    "date_of_birth": "consequatur",
    "gender": "consequatur",
    "phone": "consequatur",
    "address": "consequatur",
    "enrollment_date": "consequatur",
    "parent_name": "consequatur",
    "parent_phone": "consequatur",
    "parent_email": "qkunze@example.com",
    "emergency_contact": "consequatur",
    "emergency_phone": "consequatur",
    "profile_picture": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-student-students--id-">
</span>
<span id="execution-results-PUTapi-v1-student-students--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-student-students--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-student-students--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-student-students--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-student-students--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-student-students--id-" data-method="PUT"
      data-path="api/v1/student/students/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-student-students--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-student-students--id-"
                    onclick="tryItOut('PUTapi-v1-student-students--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-student-students--id-"
                    onclick="cancelTryOut('PUTapi-v1-student-students--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-student-students--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/student/students/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/student/students/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-student-students--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-student-students--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-student-students--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the student. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>student_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="student_number"                data-endpoint="PUTapi-v1-student-students--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Número do estudante Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>first_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="first_name"                data-endpoint="PUTapi-v1-student-students--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Primeiro nome Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="last_name"                data-endpoint="PUTapi-v1-student-students--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Último nome Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>date_of_birth</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="date_of_birth"                data-endpoint="PUTapi-v1-student-students--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Data de nascimento Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>gender</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="gender"                data-endpoint="PUTapi-v1-student-students--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Gênero (M/F) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="PUTapi-v1-student-students--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Telefone Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="address"                data-endpoint="PUTapi-v1-student-students--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Endereço Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>enrollment_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="enrollment_date"                data-endpoint="PUTapi-v1-student-students--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Data de matrícula Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>parent_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="parent_name"                data-endpoint="PUTapi-v1-student-students--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Nome do responsável Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>parent_phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="parent_phone"                data-endpoint="PUTapi-v1-student-students--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Telefone do responsável Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>parent_email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="parent_email"                data-endpoint="PUTapi-v1-student-students--id-"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Email do responsável Example: <code>qkunze@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>emergency_contact</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="emergency_contact"                data-endpoint="PUTapi-v1-student-students--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Contato de emergência Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>emergency_phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="emergency_phone"                data-endpoint="PUTapi-v1-student-students--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Telefone de emergência Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>profile_picture</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="profile_picture"                data-endpoint="PUTapi-v1-student-students--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>URL da foto de perfil Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="estudantes-DELETEapi-v1-student-students--id-">DELETE api/v1/student/students/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-student-students--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/student/students/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/students/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-student-students--id-">
</span>
<span id="execution-results-DELETEapi-v1-student-students--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-student-students--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-student-students--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-student-students--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-student-students--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-student-students--id-" data-method="DELETE"
      data-path="api/v1/student/students/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-student-students--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-student-students--id-"
                    onclick="tryItOut('DELETEapi-v1-student-students--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-student-students--id-"
                    onclick="cancelTryOut('DELETEapi-v1-student-students--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-student-students--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/student/students/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-student-students--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-student-students--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-student-students--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the student. Example: <code>consequatur</code></p>
            </div>
                    </form>

                <h1 id="eventos-de-calendario">Eventos de Calendário</h1>

    <p>API para gerenciamento de eventos de calendário</p>

                                <h2 id="eventos-de-calendario-GETapi-v1-admin-calendar-events">GET api/v1/admin/calendar-events</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-admin-calendar-events">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/admin/calendar-events" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/calendar-events"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-calendar-events">
    </span>
<span id="execution-results-GETapi-v1-admin-calendar-events" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-calendar-events"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-calendar-events"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-calendar-events" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-calendar-events">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-calendar-events" data-method="GET"
      data-path="api/v1/admin/calendar-events"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-calendar-events', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-calendar-events"
                    onclick="tryItOut('GETapi-v1-admin-calendar-events');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-calendar-events"
                    onclick="cancelTryOut('GETapi-v1-admin-calendar-events');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-calendar-events"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/calendar-events</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-calendar-events"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-calendar-events"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="eventos-de-calendario-POSTapi-v1-admin-calendar-events">POST api/v1/admin/calendar-events</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-admin-calendar-events">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/admin/calendar-events" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"consequatur\",
    \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\",
    \"start_time\": \"consequatur\",
    \"end_time\": \"consequatur\",
    \"class_id\": 17,
    \"subject_id\": 17,
    \"created_by\": 17,
    \"event_type\": \"consequatur\",
    \"status\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/calendar-events"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "consequatur",
    "description": "Dolores dolorum amet iste laborum eius est dolor.",
    "start_time": "consequatur",
    "end_time": "consequatur",
    "class_id": 17,
    "subject_id": 17,
    "created_by": 17,
    "event_type": "consequatur",
    "status": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-calendar-events">
</span>
<span id="execution-results-POSTapi-v1-admin-calendar-events" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-calendar-events"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-calendar-events"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-calendar-events" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-calendar-events">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-calendar-events" data-method="POST"
      data-path="api/v1/admin/calendar-events"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-calendar-events', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-calendar-events"
                    onclick="tryItOut('POSTapi-v1-admin-calendar-events');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-calendar-events"
                    onclick="cancelTryOut('POSTapi-v1-admin-calendar-events');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-calendar-events"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/calendar-events</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-calendar-events"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-admin-calendar-events"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-v1-admin-calendar-events"
               value="consequatur"
               data-component="body">
    <br>
<p>Título do evento Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-v1-admin-calendar-events"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Descrição Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_time</code></b>&nbsp;&nbsp;
<small>datetime</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_time"                data-endpoint="POSTapi-v1-admin-calendar-events"
               value="consequatur"
               data-component="body">
    <br>
<p>Data e hora de início Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_time</code></b>&nbsp;&nbsp;
<small>datetime</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="end_time"                data-endpoint="POSTapi-v1-admin-calendar-events"
               value="consequatur"
               data-component="body">
    <br>
<p>Data e hora de término Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>class_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="class_id"                data-endpoint="POSTapi-v1-admin-calendar-events"
               value="17"
               data-component="body">
    <br>
<p>ID da turma Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>subject_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="subject_id"                data-endpoint="POSTapi-v1-admin-calendar-events"
               value="17"
               data-component="body">
    <br>
<p>ID da disciplina Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>created_by</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="created_by"                data-endpoint="POSTapi-v1-admin-calendar-events"
               value="17"
               data-component="body">
    <br>
<p>ID do usuário que criou Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>event_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="event_type"                data-endpoint="POSTapi-v1-admin-calendar-events"
               value="consequatur"
               data-component="body">
    <br>
<p>Tipo de evento (exam/meeting/holiday/other) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-v1-admin-calendar-events"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (active/cancelled) Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="eventos-de-calendario-GETapi-v1-admin-calendar-events--id-">GET api/v1/admin/calendar-events/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-admin-calendar-events--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/admin/calendar-events/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/calendar-events/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-calendar-events--id-">
    </span>
<span id="execution-results-GETapi-v1-admin-calendar-events--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-calendar-events--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-calendar-events--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-calendar-events--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-calendar-events--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-calendar-events--id-" data-method="GET"
      data-path="api/v1/admin/calendar-events/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-calendar-events--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-calendar-events--id-"
                    onclick="tryItOut('GETapi-v1-admin-calendar-events--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-calendar-events--id-"
                    onclick="cancelTryOut('GETapi-v1-admin-calendar-events--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-calendar-events--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/calendar-events/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-calendar-events--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-calendar-events--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-admin-calendar-events--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the calendar event. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="eventos-de-calendario-PUTapi-v1-admin-calendar-events--id-">PUT api/v1/admin/calendar-events/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-admin-calendar-events--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/admin/calendar-events/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"consequatur\",
    \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\",
    \"start_time\": \"consequatur\",
    \"end_time\": \"consequatur\",
    \"class_id\": 17,
    \"subject_id\": 17,
    \"created_by\": 17,
    \"event_type\": \"consequatur\",
    \"status\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/calendar-events/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "consequatur",
    "description": "Dolores dolorum amet iste laborum eius est dolor.",
    "start_time": "consequatur",
    "end_time": "consequatur",
    "class_id": 17,
    "subject_id": 17,
    "created_by": 17,
    "event_type": "consequatur",
    "status": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-admin-calendar-events--id-">
</span>
<span id="execution-results-PUTapi-v1-admin-calendar-events--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-admin-calendar-events--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-admin-calendar-events--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-admin-calendar-events--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-admin-calendar-events--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-admin-calendar-events--id-" data-method="PUT"
      data-path="api/v1/admin/calendar-events/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-admin-calendar-events--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-admin-calendar-events--id-"
                    onclick="tryItOut('PUTapi-v1-admin-calendar-events--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-admin-calendar-events--id-"
                    onclick="cancelTryOut('PUTapi-v1-admin-calendar-events--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-admin-calendar-events--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/admin/calendar-events/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/admin/calendar-events/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-admin-calendar-events--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-admin-calendar-events--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-admin-calendar-events--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the calendar event. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-v1-admin-calendar-events--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Título do evento Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-v1-admin-calendar-events--id-"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Descrição Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_time</code></b>&nbsp;&nbsp;
<small>datetime</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="start_time"                data-endpoint="PUTapi-v1-admin-calendar-events--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Data e hora de início Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_time</code></b>&nbsp;&nbsp;
<small>datetime</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="end_time"                data-endpoint="PUTapi-v1-admin-calendar-events--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Data e hora de término Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>class_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="class_id"                data-endpoint="PUTapi-v1-admin-calendar-events--id-"
               value="17"
               data-component="body">
    <br>
<p>ID da turma Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>subject_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="subject_id"                data-endpoint="PUTapi-v1-admin-calendar-events--id-"
               value="17"
               data-component="body">
    <br>
<p>ID da disciplina Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>created_by</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="created_by"                data-endpoint="PUTapi-v1-admin-calendar-events--id-"
               value="17"
               data-component="body">
    <br>
<p>ID do usuário que criou Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>event_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="event_type"                data-endpoint="PUTapi-v1-admin-calendar-events--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Tipo de evento (exam/meeting/holiday/other) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-v1-admin-calendar-events--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (active/cancelled) Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="eventos-de-calendario-DELETEapi-v1-admin-calendar-events--id-">DELETE api/v1/admin/calendar-events/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-admin-calendar-events--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/admin/calendar-events/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/calendar-events/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-admin-calendar-events--id-">
</span>
<span id="execution-results-DELETEapi-v1-admin-calendar-events--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-admin-calendar-events--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-admin-calendar-events--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-admin-calendar-events--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-admin-calendar-events--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-admin-calendar-events--id-" data-method="DELETE"
      data-path="api/v1/admin/calendar-events/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-admin-calendar-events--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-admin-calendar-events--id-"
                    onclick="tryItOut('DELETEapi-v1-admin-calendar-events--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-admin-calendar-events--id-"
                    onclick="cancelTryOut('DELETEapi-v1-admin-calendar-events--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-admin-calendar-events--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/admin/calendar-events/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-admin-calendar-events--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-admin-calendar-events--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-admin-calendar-events--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the calendar event. Example: <code>consequatur</code></p>
            </div>
                    </form>

                <h1 id="logs-de-auditoria">Logs de Auditoria</h1>

    <p>API para gerenciamento de logs de auditoria</p>

                                <h2 id="logs-de-auditoria-GETapi-v1-admin-audit-logs">GET api/v1/admin/audit-logs</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-admin-audit-logs">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/admin/audit-logs" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/audit-logs"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-audit-logs">
    </span>
<span id="execution-results-GETapi-v1-admin-audit-logs" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-audit-logs"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-audit-logs"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-audit-logs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-audit-logs">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-audit-logs" data-method="GET"
      data-path="api/v1/admin/audit-logs"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-audit-logs', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-audit-logs"
                    onclick="tryItOut('GETapi-v1-admin-audit-logs');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-audit-logs"
                    onclick="cancelTryOut('GETapi-v1-admin-audit-logs');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-audit-logs"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/audit-logs</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-audit-logs"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-audit-logs"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="logs-de-auditoria-POSTapi-v1-admin-audit-logs">POST api/v1/admin/audit-logs</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-admin-audit-logs">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/admin/audit-logs" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_id\": 17,
    \"action\": \"consequatur\",
    \"entity_type\": \"consequatur\",
    \"entity_id\": 17,
    \"details\": []
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/audit-logs"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 17,
    "action": "consequatur",
    "entity_type": "consequatur",
    "entity_id": 17,
    "details": []
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-audit-logs">
</span>
<span id="execution-results-POSTapi-v1-admin-audit-logs" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-audit-logs"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-audit-logs"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-audit-logs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-audit-logs">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-audit-logs" data-method="POST"
      data-path="api/v1/admin/audit-logs"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-audit-logs', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-audit-logs"
                    onclick="tryItOut('POSTapi-v1-admin-audit-logs');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-audit-logs"
                    onclick="cancelTryOut('POSTapi-v1-admin-audit-logs');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-audit-logs"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/audit-logs</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-audit-logs"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-admin-audit-logs"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="POSTapi-v1-admin-audit-logs"
               value="17"
               data-component="body">
    <br>
<p>ID do usuário Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>action</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="action"                data-endpoint="POSTapi-v1-admin-audit-logs"
               value="consequatur"
               data-component="body">
    <br>
<p>Ação realizada Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>entity_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="entity_type"                data-endpoint="POSTapi-v1-admin-audit-logs"
               value="consequatur"
               data-component="body">
    <br>
<p>Tipo de entidade Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>entity_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="entity_id"                data-endpoint="POSTapi-v1-admin-audit-logs"
               value="17"
               data-component="body">
    <br>
<p>ID da entidade Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>details</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="details"                data-endpoint="POSTapi-v1-admin-audit-logs"
               value=""
               data-component="body">
    <br>
<p>Detalhes adicionais</p>
        </div>
        </form>

                    <h2 id="logs-de-auditoria-GETapi-v1-admin-audit-logs--id-">GET api/v1/admin/audit-logs/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-admin-audit-logs--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/admin/audit-logs/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/audit-logs/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-audit-logs--id-">
    </span>
<span id="execution-results-GETapi-v1-admin-audit-logs--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-audit-logs--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-audit-logs--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-audit-logs--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-audit-logs--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-audit-logs--id-" data-method="GET"
      data-path="api/v1/admin/audit-logs/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-audit-logs--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-audit-logs--id-"
                    onclick="tryItOut('GETapi-v1-admin-audit-logs--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-audit-logs--id-"
                    onclick="cancelTryOut('GETapi-v1-admin-audit-logs--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-audit-logs--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/audit-logs/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-audit-logs--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-audit-logs--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-admin-audit-logs--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the audit log. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="logs-de-auditoria-PUTapi-v1-admin-audit-logs--id-">PUT api/v1/admin/audit-logs/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-admin-audit-logs--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/admin/audit-logs/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_id\": 17,
    \"action\": \"consequatur\",
    \"entity_type\": \"consequatur\",
    \"entity_id\": 17,
    \"details\": []
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/audit-logs/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 17,
    "action": "consequatur",
    "entity_type": "consequatur",
    "entity_id": 17,
    "details": []
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-admin-audit-logs--id-">
</span>
<span id="execution-results-PUTapi-v1-admin-audit-logs--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-admin-audit-logs--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-admin-audit-logs--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-admin-audit-logs--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-admin-audit-logs--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-admin-audit-logs--id-" data-method="PUT"
      data-path="api/v1/admin/audit-logs/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-admin-audit-logs--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-admin-audit-logs--id-"
                    onclick="tryItOut('PUTapi-v1-admin-audit-logs--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-admin-audit-logs--id-"
                    onclick="cancelTryOut('PUTapi-v1-admin-audit-logs--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-admin-audit-logs--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/admin/audit-logs/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/admin/audit-logs/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-admin-audit-logs--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-admin-audit-logs--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-admin-audit-logs--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the audit log. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="PUTapi-v1-admin-audit-logs--id-"
               value="17"
               data-component="body">
    <br>
<p>ID do usuário Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>action</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="action"                data-endpoint="PUTapi-v1-admin-audit-logs--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Ação realizada Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>entity_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="entity_type"                data-endpoint="PUTapi-v1-admin-audit-logs--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Tipo de entidade Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>entity_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="entity_id"                data-endpoint="PUTapi-v1-admin-audit-logs--id-"
               value="17"
               data-component="body">
    <br>
<p>ID da entidade Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>details</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="details"                data-endpoint="PUTapi-v1-admin-audit-logs--id-"
               value=""
               data-component="body">
    <br>
<p>Detalhes adicionais</p>
        </div>
        </form>

                    <h2 id="logs-de-auditoria-DELETEapi-v1-admin-audit-logs--id-">DELETE api/v1/admin/audit-logs/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-admin-audit-logs--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/admin/audit-logs/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/audit-logs/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-admin-audit-logs--id-">
</span>
<span id="execution-results-DELETEapi-v1-admin-audit-logs--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-admin-audit-logs--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-admin-audit-logs--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-admin-audit-logs--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-admin-audit-logs--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-admin-audit-logs--id-" data-method="DELETE"
      data-path="api/v1/admin/audit-logs/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-admin-audit-logs--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-admin-audit-logs--id-"
                    onclick="tryItOut('DELETEapi-v1-admin-audit-logs--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-admin-audit-logs--id-"
                    onclick="cancelTryOut('DELETEapi-v1-admin-audit-logs--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-admin-audit-logs--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/admin/audit-logs/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-admin-audit-logs--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-admin-audit-logs--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-admin-audit-logs--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the audit log. Example: <code>consequatur</code></p>
            </div>
                    </form>

                <h1 id="materiais">Materiais</h1>

    <p>API para gerenciamento de materiais</p>

                                <h2 id="materiais-GETapi-v1-teacher-materials">GET api/v1/teacher/materials</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-teacher-materials">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/teacher/materials" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/materials"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-teacher-materials">
    </span>
<span id="execution-results-GETapi-v1-teacher-materials" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-teacher-materials"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-teacher-materials"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-teacher-materials" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-teacher-materials">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-teacher-materials" data-method="GET"
      data-path="api/v1/teacher/materials"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-teacher-materials', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-teacher-materials"
                    onclick="tryItOut('GETapi-v1-teacher-materials');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-teacher-materials"
                    onclick="cancelTryOut('GETapi-v1-teacher-materials');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-teacher-materials"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/teacher/materials</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-teacher-materials"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-teacher-materials"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="materiais-POSTapi-v1-teacher-materials">POST api/v1/teacher/materials</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-teacher-materials">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/teacher/materials" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"consequatur\",
    \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\",
    \"file_path\": \"consequatur\",
    \"file_type\": \"consequatur\",
    \"subject_id\": 17,
    \"class_id\": 17,
    \"uploaded_by\": 17,
    \"status\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/materials"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "consequatur",
    "description": "Dolores dolorum amet iste laborum eius est dolor.",
    "file_path": "consequatur",
    "file_type": "consequatur",
    "subject_id": 17,
    "class_id": 17,
    "uploaded_by": 17,
    "status": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-teacher-materials">
</span>
<span id="execution-results-POSTapi-v1-teacher-materials" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-teacher-materials"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-teacher-materials"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-teacher-materials" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-teacher-materials">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-teacher-materials" data-method="POST"
      data-path="api/v1/teacher/materials"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-teacher-materials', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-teacher-materials"
                    onclick="tryItOut('POSTapi-v1-teacher-materials');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-teacher-materials"
                    onclick="cancelTryOut('POSTapi-v1-teacher-materials');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-teacher-materials"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/teacher/materials</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-teacher-materials"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-teacher-materials"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-v1-teacher-materials"
               value="consequatur"
               data-component="body">
    <br>
<p>Título do material Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-v1-teacher-materials"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Descrição Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>file_path</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="file_path"                data-endpoint="POSTapi-v1-teacher-materials"
               value="consequatur"
               data-component="body">
    <br>
<p>Caminho do arquivo Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>file_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="file_type"                data-endpoint="POSTapi-v1-teacher-materials"
               value="consequatur"
               data-component="body">
    <br>
<p>Tipo de arquivo (pdf/doc/video/image/other) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>subject_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="subject_id"                data-endpoint="POSTapi-v1-teacher-materials"
               value="17"
               data-component="body">
    <br>
<p>ID da disciplina Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>class_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="class_id"                data-endpoint="POSTapi-v1-teacher-materials"
               value="17"
               data-component="body">
    <br>
<p>ID da turma Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>uploaded_by</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="uploaded_by"                data-endpoint="POSTapi-v1-teacher-materials"
               value="17"
               data-component="body">
    <br>
<p>ID do professor que enviou Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-v1-teacher-materials"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (active/archived) Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="materiais-GETapi-v1-teacher-materials--id-">GET api/v1/teacher/materials/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-teacher-materials--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/teacher/materials/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/materials/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-teacher-materials--id-">
    </span>
<span id="execution-results-GETapi-v1-teacher-materials--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-teacher-materials--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-teacher-materials--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-teacher-materials--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-teacher-materials--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-teacher-materials--id-" data-method="GET"
      data-path="api/v1/teacher/materials/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-teacher-materials--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-teacher-materials--id-"
                    onclick="tryItOut('GETapi-v1-teacher-materials--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-teacher-materials--id-"
                    onclick="cancelTryOut('GETapi-v1-teacher-materials--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-teacher-materials--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/teacher/materials/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-teacher-materials--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-teacher-materials--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-teacher-materials--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the material. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="materiais-PUTapi-v1-teacher-materials--id-">PUT api/v1/teacher/materials/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-teacher-materials--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/teacher/materials/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"consequatur\",
    \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\",
    \"file_path\": \"consequatur\",
    \"file_type\": \"consequatur\",
    \"subject_id\": 17,
    \"class_id\": 17,
    \"uploaded_by\": 17,
    \"status\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/materials/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "consequatur",
    "description": "Dolores dolorum amet iste laborum eius est dolor.",
    "file_path": "consequatur",
    "file_type": "consequatur",
    "subject_id": 17,
    "class_id": 17,
    "uploaded_by": 17,
    "status": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-teacher-materials--id-">
</span>
<span id="execution-results-PUTapi-v1-teacher-materials--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-teacher-materials--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-teacher-materials--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-teacher-materials--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-teacher-materials--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-teacher-materials--id-" data-method="PUT"
      data-path="api/v1/teacher/materials/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-teacher-materials--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-teacher-materials--id-"
                    onclick="tryItOut('PUTapi-v1-teacher-materials--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-teacher-materials--id-"
                    onclick="cancelTryOut('PUTapi-v1-teacher-materials--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-teacher-materials--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/teacher/materials/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/teacher/materials/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-teacher-materials--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-teacher-materials--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-teacher-materials--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the material. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-v1-teacher-materials--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Título do material Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-v1-teacher-materials--id-"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Descrição Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>file_path</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="file_path"                data-endpoint="PUTapi-v1-teacher-materials--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Caminho do arquivo Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>file_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="file_type"                data-endpoint="PUTapi-v1-teacher-materials--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Tipo de arquivo (pdf/doc/video/image/other) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>subject_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="subject_id"                data-endpoint="PUTapi-v1-teacher-materials--id-"
               value="17"
               data-component="body">
    <br>
<p>ID da disciplina Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>class_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="class_id"                data-endpoint="PUTapi-v1-teacher-materials--id-"
               value="17"
               data-component="body">
    <br>
<p>ID da turma Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>uploaded_by</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="uploaded_by"                data-endpoint="PUTapi-v1-teacher-materials--id-"
               value="17"
               data-component="body">
    <br>
<p>ID do professor que enviou Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-v1-teacher-materials--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (active/archived) Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="materiais-DELETEapi-v1-teacher-materials--id-">DELETE api/v1/teacher/materials/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-teacher-materials--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/teacher/materials/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/materials/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-teacher-materials--id-">
</span>
<span id="execution-results-DELETEapi-v1-teacher-materials--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-teacher-materials--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-teacher-materials--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-teacher-materials--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-teacher-materials--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-teacher-materials--id-" data-method="DELETE"
      data-path="api/v1/teacher/materials/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-teacher-materials--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-teacher-materials--id-"
                    onclick="tryItOut('DELETEapi-v1-teacher-materials--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-teacher-materials--id-"
                    onclick="cancelTryOut('DELETEapi-v1-teacher-materials--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-teacher-materials--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/teacher/materials/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-teacher-materials--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-teacher-materials--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-teacher-materials--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the material. Example: <code>consequatur</code></p>
            </div>
                    </form>

                <h1 id="matriculas">Matrículas</h1>

    <p>API para gerenciamento de matrículas</p>

                                <h2 id="matriculas-GETapi-v1-student-enrollments">GET api/v1/student/enrollments</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-student-enrollments">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/student/enrollments" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/enrollments"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-student-enrollments">
    </span>
<span id="execution-results-GETapi-v1-student-enrollments" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-student-enrollments"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-student-enrollments"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-student-enrollments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-student-enrollments">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-student-enrollments" data-method="GET"
      data-path="api/v1/student/enrollments"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-student-enrollments', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-student-enrollments"
                    onclick="tryItOut('GETapi-v1-student-enrollments');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-student-enrollments"
                    onclick="cancelTryOut('GETapi-v1-student-enrollments');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-student-enrollments"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/student/enrollments</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-student-enrollments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-student-enrollments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="matriculas-POSTapi-v1-student-enrollments">POST api/v1/student/enrollments</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-student-enrollments">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/student/enrollments" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"student_id\": 17,
    \"class_id\": 17,
    \"enrollment_date\": \"consequatur\",
    \"status\": \"consequatur\",
    \"academic_year\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/enrollments"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "student_id": 17,
    "class_id": 17,
    "enrollment_date": "consequatur",
    "status": "consequatur",
    "academic_year": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-student-enrollments">
</span>
<span id="execution-results-POSTapi-v1-student-enrollments" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-student-enrollments"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-student-enrollments"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-student-enrollments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-student-enrollments">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-student-enrollments" data-method="POST"
      data-path="api/v1/student/enrollments"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-student-enrollments', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-student-enrollments"
                    onclick="tryItOut('POSTapi-v1-student-enrollments');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-student-enrollments"
                    onclick="cancelTryOut('POSTapi-v1-student-enrollments');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-student-enrollments"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/student/enrollments</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-student-enrollments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-student-enrollments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>student_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="student_id"                data-endpoint="POSTapi-v1-student-enrollments"
               value="17"
               data-component="body">
    <br>
<p>ID do estudante Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>class_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="class_id"                data-endpoint="POSTapi-v1-student-enrollments"
               value="17"
               data-component="body">
    <br>
<p>ID da turma Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>enrollment_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="enrollment_date"                data-endpoint="POSTapi-v1-student-enrollments"
               value="consequatur"
               data-component="body">
    <br>
<p>Data de matrícula Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-v1-student-enrollments"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (active/transferred/graduated/dropped) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>academic_year</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="academic_year"                data-endpoint="POSTapi-v1-student-enrollments"
               value="consequatur"
               data-component="body">
    <br>
<p>Ano acadêmico (ex: 2024-2025) Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="matriculas-GETapi-v1-student-enrollments--id-">GET api/v1/student/enrollments/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-student-enrollments--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/student/enrollments/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/enrollments/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-student-enrollments--id-">
    </span>
<span id="execution-results-GETapi-v1-student-enrollments--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-student-enrollments--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-student-enrollments--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-student-enrollments--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-student-enrollments--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-student-enrollments--id-" data-method="GET"
      data-path="api/v1/student/enrollments/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-student-enrollments--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-student-enrollments--id-"
                    onclick="tryItOut('GETapi-v1-student-enrollments--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-student-enrollments--id-"
                    onclick="cancelTryOut('GETapi-v1-student-enrollments--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-student-enrollments--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/student/enrollments/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-student-enrollments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-student-enrollments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-student-enrollments--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the enrollment. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="matriculas-PUTapi-v1-student-enrollments--id-">PUT api/v1/student/enrollments/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-student-enrollments--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/student/enrollments/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"student_id\": 17,
    \"class_id\": 17,
    \"enrollment_date\": \"consequatur\",
    \"status\": \"consequatur\",
    \"academic_year\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/enrollments/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "student_id": 17,
    "class_id": 17,
    "enrollment_date": "consequatur",
    "status": "consequatur",
    "academic_year": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-student-enrollments--id-">
</span>
<span id="execution-results-PUTapi-v1-student-enrollments--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-student-enrollments--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-student-enrollments--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-student-enrollments--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-student-enrollments--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-student-enrollments--id-" data-method="PUT"
      data-path="api/v1/student/enrollments/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-student-enrollments--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-student-enrollments--id-"
                    onclick="tryItOut('PUTapi-v1-student-enrollments--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-student-enrollments--id-"
                    onclick="cancelTryOut('PUTapi-v1-student-enrollments--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-student-enrollments--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/student/enrollments/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/student/enrollments/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-student-enrollments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-student-enrollments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-student-enrollments--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the enrollment. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>student_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="student_id"                data-endpoint="PUTapi-v1-student-enrollments--id-"
               value="17"
               data-component="body">
    <br>
<p>ID do estudante Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>class_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="class_id"                data-endpoint="PUTapi-v1-student-enrollments--id-"
               value="17"
               data-component="body">
    <br>
<p>ID da turma Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>enrollment_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="enrollment_date"                data-endpoint="PUTapi-v1-student-enrollments--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Data de matrícula Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-v1-student-enrollments--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (active/transferred/graduated/dropped) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>academic_year</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="academic_year"                data-endpoint="PUTapi-v1-student-enrollments--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Ano acadêmico (ex: 2024-2025) Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="matriculas-DELETEapi-v1-student-enrollments--id-">DELETE api/v1/student/enrollments/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-student-enrollments--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/student/enrollments/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/enrollments/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-student-enrollments--id-">
</span>
<span id="execution-results-DELETEapi-v1-student-enrollments--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-student-enrollments--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-student-enrollments--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-student-enrollments--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-student-enrollments--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-student-enrollments--id-" data-method="DELETE"
      data-path="api/v1/student/enrollments/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-student-enrollments--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-student-enrollments--id-"
                    onclick="tryItOut('DELETEapi-v1-student-enrollments--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-student-enrollments--id-"
                    onclick="cancelTryOut('DELETEapi-v1-student-enrollments--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-student-enrollments--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/student/enrollments/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-student-enrollments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-student-enrollments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-student-enrollments--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the enrollment. Example: <code>consequatur</code></p>
            </div>
                    </form>

                <h1 id="mensagens">Mensagens</h1>

    <p>API para gerenciamento de mensagens</p>

                                <h2 id="mensagens-GETapi-v1-messages">GET api/v1/messages</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-messages">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/messages" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/messages"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-messages">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: http://localhost:3000
access-control-allow-credentials: true
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-messages" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-messages"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-messages"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-messages" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-messages">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-messages" data-method="GET"
      data-path="api/v1/messages"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-messages', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-messages"
                    onclick="tryItOut('GETapi-v1-messages');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-messages"
                    onclick="cancelTryOut('GETapi-v1-messages');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-messages"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/messages</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-messages"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-messages"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="mensagens-POSTapi-v1-messages">POST api/v1/messages</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-messages">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/messages" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"sender_id\": 17,
    \"recipient_id\": 17,
    \"content\": \"consequatur\",
    \"is_read\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/messages"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "sender_id": 17,
    "recipient_id": 17,
    "content": "consequatur",
    "is_read": false
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-messages">
</span>
<span id="execution-results-POSTapi-v1-messages" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-messages"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-messages"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-messages" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-messages">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-messages" data-method="POST"
      data-path="api/v1/messages"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-messages', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-messages"
                    onclick="tryItOut('POSTapi-v1-messages');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-messages"
                    onclick="cancelTryOut('POSTapi-v1-messages');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-messages"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/messages</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-messages"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-messages"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sender_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="sender_id"                data-endpoint="POSTapi-v1-messages"
               value="17"
               data-component="body">
    <br>
<p>ID do remetente Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>recipient_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="recipient_id"                data-endpoint="POSTapi-v1-messages"
               value="17"
               data-component="body">
    <br>
<p>ID do destinatário Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="content"                data-endpoint="POSTapi-v1-messages"
               value="consequatur"
               data-component="body">
    <br>
<p>Conteúdo Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_read</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-v1-messages" style="display: none">
            <input type="radio" name="is_read"
                   value="true"
                   data-endpoint="POSTapi-v1-messages"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-v1-messages" style="display: none">
            <input type="radio" name="is_read"
                   value="false"
                   data-endpoint="POSTapi-v1-messages"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Lido Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="mensagens-GETapi-v1-messages--id-">GET api/v1/messages/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-messages--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/messages/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/messages/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-messages--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: http://localhost:3000
access-control-allow-credentials: true
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-messages--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-messages--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-messages--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-messages--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-messages--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-messages--id-" data-method="GET"
      data-path="api/v1/messages/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-messages--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-messages--id-"
                    onclick="tryItOut('GETapi-v1-messages--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-messages--id-"
                    onclick="cancelTryOut('GETapi-v1-messages--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-messages--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/messages/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-messages--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-messages--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-messages--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the message. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="mensagens-PUTapi-v1-messages--id-">PUT api/v1/messages/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-messages--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/messages/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"sender_id\": 17,
    \"recipient_id\": 17,
    \"content\": \"consequatur\",
    \"is_read\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/messages/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "sender_id": 17,
    "recipient_id": 17,
    "content": "consequatur",
    "is_read": false
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-messages--id-">
</span>
<span id="execution-results-PUTapi-v1-messages--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-messages--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-messages--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-messages--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-messages--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-messages--id-" data-method="PUT"
      data-path="api/v1/messages/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-messages--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-messages--id-"
                    onclick="tryItOut('PUTapi-v1-messages--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-messages--id-"
                    onclick="cancelTryOut('PUTapi-v1-messages--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-messages--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/messages/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/messages/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-messages--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-messages--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-messages--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the message. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sender_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="sender_id"                data-endpoint="PUTapi-v1-messages--id-"
               value="17"
               data-component="body">
    <br>
<p>ID do remetente Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>recipient_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="recipient_id"                data-endpoint="PUTapi-v1-messages--id-"
               value="17"
               data-component="body">
    <br>
<p>ID do destinatário Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="content"                data-endpoint="PUTapi-v1-messages--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Conteúdo Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_read</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-v1-messages--id-" style="display: none">
            <input type="radio" name="is_read"
                   value="true"
                   data-endpoint="PUTapi-v1-messages--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-v1-messages--id-" style="display: none">
            <input type="radio" name="is_read"
                   value="false"
                   data-endpoint="PUTapi-v1-messages--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Lido Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="mensagens-DELETEapi-v1-messages--id-">DELETE api/v1/messages/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-messages--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/messages/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/messages/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-messages--id-">
</span>
<span id="execution-results-DELETEapi-v1-messages--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-messages--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-messages--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-messages--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-messages--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-messages--id-" data-method="DELETE"
      data-path="api/v1/messages/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-messages--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-messages--id-"
                    onclick="tryItOut('DELETEapi-v1-messages--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-messages--id-"
                    onclick="cancelTryOut('DELETEapi-v1-messages--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-messages--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/messages/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-messages--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-messages--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-messages--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the message. Example: <code>consequatur</code></p>
            </div>
                    </form>

                <h1 id="notas">Notas</h1>

    <p>API para gerenciamento de notas</p>

                                <h2 id="notas-GETapi-v1-student-grades">GET api/v1/student/grades</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-student-grades">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/student/grades" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/grades"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-student-grades">
    </span>
<span id="execution-results-GETapi-v1-student-grades" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-student-grades"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-student-grades"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-student-grades" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-student-grades">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-student-grades" data-method="GET"
      data-path="api/v1/student/grades"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-student-grades', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-student-grades"
                    onclick="tryItOut('GETapi-v1-student-grades');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-student-grades"
                    onclick="cancelTryOut('GETapi-v1-student-grades');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-student-grades"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/student/grades</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-student-grades"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-student-grades"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="notas-POSTapi-v1-student-grades">POST api/v1/student/grades</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-student-grades">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/student/grades" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"student_id\": 17,
    \"subject_id\": 17,
    \"class_id\": 17,
    \"academic_year\": \"consequatur\",
    \"quarter_1\": 11613.31890586,
    \"quarter_2\": 11613.31890586,
    \"quarter_3\": 11613.31890586,
    \"final_exam\": 11613.31890586,
    \"final_grade\": 11613.31890586,
    \"status\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/grades"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "student_id": 17,
    "subject_id": 17,
    "class_id": 17,
    "academic_year": "consequatur",
    "quarter_1": 11613.31890586,
    "quarter_2": 11613.31890586,
    "quarter_3": 11613.31890586,
    "final_exam": 11613.31890586,
    "final_grade": 11613.31890586,
    "status": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-student-grades">
</span>
<span id="execution-results-POSTapi-v1-student-grades" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-student-grades"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-student-grades"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-student-grades" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-student-grades">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-student-grades" data-method="POST"
      data-path="api/v1/student/grades"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-student-grades', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-student-grades"
                    onclick="tryItOut('POSTapi-v1-student-grades');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-student-grades"
                    onclick="cancelTryOut('POSTapi-v1-student-grades');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-student-grades"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/student/grades</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-student-grades"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-student-grades"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>student_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="student_id"                data-endpoint="POSTapi-v1-student-grades"
               value="17"
               data-component="body">
    <br>
<p>ID do estudante Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>subject_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="subject_id"                data-endpoint="POSTapi-v1-student-grades"
               value="17"
               data-component="body">
    <br>
<p>ID da disciplina Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>class_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="class_id"                data-endpoint="POSTapi-v1-student-grades"
               value="17"
               data-component="body">
    <br>
<p>ID da turma Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>academic_year</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="academic_year"                data-endpoint="POSTapi-v1-student-grades"
               value="consequatur"
               data-component="body">
    <br>
<p>Ano acadêmico (ex: 2024-2025) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>quarter_1</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="quarter_1"                data-endpoint="POSTapi-v1-student-grades"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Nota do 1º trimestre Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>quarter_2</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="quarter_2"                data-endpoint="POSTapi-v1-student-grades"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Nota do 2º trimestre Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>quarter_3</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="quarter_3"                data-endpoint="POSTapi-v1-student-grades"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Nota do 3º trimestre Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>final_exam</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="final_exam"                data-endpoint="POSTapi-v1-student-grades"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Nota do exame final Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>final_grade</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="final_grade"                data-endpoint="POSTapi-v1-student-grades"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Nota final Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-v1-student-grades"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (passed/failed/incomplete) Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="notas-GETapi-v1-student-grades--id-">GET api/v1/student/grades/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-student-grades--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/student/grades/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/grades/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-student-grades--id-">
    </span>
<span id="execution-results-GETapi-v1-student-grades--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-student-grades--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-student-grades--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-student-grades--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-student-grades--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-student-grades--id-" data-method="GET"
      data-path="api/v1/student/grades/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-student-grades--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-student-grades--id-"
                    onclick="tryItOut('GETapi-v1-student-grades--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-student-grades--id-"
                    onclick="cancelTryOut('GETapi-v1-student-grades--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-student-grades--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/student/grades/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-student-grades--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-student-grades--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-student-grades--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the grade. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="notas-PUTapi-v1-student-grades--id-">PUT api/v1/student/grades/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-student-grades--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/student/grades/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"student_id\": 17,
    \"subject_id\": 17,
    \"class_id\": 17,
    \"academic_year\": \"consequatur\",
    \"quarter_1\": 11613.31890586,
    \"quarter_2\": 11613.31890586,
    \"quarter_3\": 11613.31890586,
    \"final_exam\": 11613.31890586,
    \"final_grade\": 11613.31890586,
    \"status\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/grades/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "student_id": 17,
    "subject_id": 17,
    "class_id": 17,
    "academic_year": "consequatur",
    "quarter_1": 11613.31890586,
    "quarter_2": 11613.31890586,
    "quarter_3": 11613.31890586,
    "final_exam": 11613.31890586,
    "final_grade": 11613.31890586,
    "status": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-student-grades--id-">
</span>
<span id="execution-results-PUTapi-v1-student-grades--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-student-grades--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-student-grades--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-student-grades--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-student-grades--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-student-grades--id-" data-method="PUT"
      data-path="api/v1/student/grades/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-student-grades--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-student-grades--id-"
                    onclick="tryItOut('PUTapi-v1-student-grades--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-student-grades--id-"
                    onclick="cancelTryOut('PUTapi-v1-student-grades--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-student-grades--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/student/grades/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/student/grades/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-student-grades--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-student-grades--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-student-grades--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the grade. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>student_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="student_id"                data-endpoint="PUTapi-v1-student-grades--id-"
               value="17"
               data-component="body">
    <br>
<p>ID do estudante Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>subject_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="subject_id"                data-endpoint="PUTapi-v1-student-grades--id-"
               value="17"
               data-component="body">
    <br>
<p>ID da disciplina Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>class_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="class_id"                data-endpoint="PUTapi-v1-student-grades--id-"
               value="17"
               data-component="body">
    <br>
<p>ID da turma Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>academic_year</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="academic_year"                data-endpoint="PUTapi-v1-student-grades--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Ano acadêmico (ex: 2024-2025) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>quarter_1</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="quarter_1"                data-endpoint="PUTapi-v1-student-grades--id-"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Nota do 1º trimestre Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>quarter_2</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="quarter_2"                data-endpoint="PUTapi-v1-student-grades--id-"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Nota do 2º trimestre Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>quarter_3</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="quarter_3"                data-endpoint="PUTapi-v1-student-grades--id-"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Nota do 3º trimestre Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>final_exam</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="final_exam"                data-endpoint="PUTapi-v1-student-grades--id-"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Nota do exame final Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>final_grade</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="final_grade"                data-endpoint="PUTapi-v1-student-grades--id-"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Nota final Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-v1-student-grades--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (passed/failed/incomplete) Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="notas-DELETEapi-v1-student-grades--id-">DELETE api/v1/student/grades/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-student-grades--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/student/grades/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/grades/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-student-grades--id-">
</span>
<span id="execution-results-DELETEapi-v1-student-grades--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-student-grades--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-student-grades--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-student-grades--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-student-grades--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-student-grades--id-" data-method="DELETE"
      data-path="api/v1/student/grades/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-student-grades--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-student-grades--id-"
                    onclick="tryItOut('DELETEapi-v1-student-grades--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-student-grades--id-"
                    onclick="cancelTryOut('DELETEapi-v1-student-grades--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-student-grades--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/student/grades/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-student-grades--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-student-grades--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-student-grades--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the grade. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="notas-GETapi-v1-student-grades-summary">GET api/v1/student/grades/summary</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-student-grades-summary">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/student/grades/summary" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/grades/summary"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-student-grades-summary">
    </span>
<span id="execution-results-GETapi-v1-student-grades-summary" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-student-grades-summary"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-student-grades-summary"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-student-grades-summary" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-student-grades-summary">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-student-grades-summary" data-method="GET"
      data-path="api/v1/student/grades/summary"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-student-grades-summary', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-student-grades-summary"
                    onclick="tryItOut('GETapi-v1-student-grades-summary');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-student-grades-summary"
                    onclick="cancelTryOut('GETapi-v1-student-grades-summary');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-student-grades-summary"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/student/grades/summary</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-student-grades-summary"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-student-grades-summary"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="notificacoes">Notificações</h1>

    <p>API para gerenciamento de notificações</p>

                                <h2 id="notificacoes-GETapi-v1-notifications">GET api/v1/notifications</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-notifications">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/notifications" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/notifications"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-notifications">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: http://localhost:3000
access-control-allow-credentials: true
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-notifications" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-notifications"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-notifications"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-notifications" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-notifications">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-notifications" data-method="GET"
      data-path="api/v1/notifications"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-notifications', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-notifications"
                    onclick="tryItOut('GETapi-v1-notifications');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-notifications"
                    onclick="cancelTryOut('GETapi-v1-notifications');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-notifications"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/notifications</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-notifications"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-notifications"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="notificacoes-POSTapi-v1-notifications">POST api/v1/notifications</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-notifications">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/notifications" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_id\": 17,
    \"title\": \"consequatur\",
    \"message\": \"consequatur\",
    \"type\": \"consequatur\",
    \"is_read\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/notifications"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 17,
    "title": "consequatur",
    "message": "consequatur",
    "type": "consequatur",
    "is_read": false
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-notifications">
</span>
<span id="execution-results-POSTapi-v1-notifications" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-notifications"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-notifications"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-notifications" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-notifications">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-notifications" data-method="POST"
      data-path="api/v1/notifications"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-notifications', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-notifications"
                    onclick="tryItOut('POSTapi-v1-notifications');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-notifications"
                    onclick="cancelTryOut('POSTapi-v1-notifications');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-notifications"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/notifications</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-notifications"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-notifications"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="POSTapi-v1-notifications"
               value="17"
               data-component="body">
    <br>
<p>ID do usuário Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-v1-notifications"
               value="consequatur"
               data-component="body">
    <br>
<p>Título da notificação Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>message</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="message"                data-endpoint="POSTapi-v1-notifications"
               value="consequatur"
               data-component="body">
    <br>
<p>Mensagem Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="POSTapi-v1-notifications"
               value="consequatur"
               data-component="body">
    <br>
<p>Tipo (info/warning/alert/success) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_read</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-v1-notifications" style="display: none">
            <input type="radio" name="is_read"
                   value="true"
                   data-endpoint="POSTapi-v1-notifications"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-v1-notifications" style="display: none">
            <input type="radio" name="is_read"
                   value="false"
                   data-endpoint="POSTapi-v1-notifications"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Lido Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="notificacoes-GETapi-v1-notifications--id-">GET api/v1/notifications/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-notifications--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/notifications/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/notifications/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-notifications--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: http://localhost:3000
access-control-allow-credentials: true
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-notifications--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-notifications--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-notifications--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-notifications--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-notifications--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-notifications--id-" data-method="GET"
      data-path="api/v1/notifications/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-notifications--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-notifications--id-"
                    onclick="tryItOut('GETapi-v1-notifications--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-notifications--id-"
                    onclick="cancelTryOut('GETapi-v1-notifications--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-notifications--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/notifications/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-notifications--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-notifications--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-notifications--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the notification. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="notificacoes-PUTapi-v1-notifications--id-">PUT api/v1/notifications/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-notifications--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/notifications/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_id\": 17,
    \"title\": \"consequatur\",
    \"message\": \"consequatur\",
    \"type\": \"consequatur\",
    \"is_read\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/notifications/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 17,
    "title": "consequatur",
    "message": "consequatur",
    "type": "consequatur",
    "is_read": false
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-notifications--id-">
</span>
<span id="execution-results-PUTapi-v1-notifications--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-notifications--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-notifications--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-notifications--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-notifications--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-notifications--id-" data-method="PUT"
      data-path="api/v1/notifications/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-notifications--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-notifications--id-"
                    onclick="tryItOut('PUTapi-v1-notifications--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-notifications--id-"
                    onclick="cancelTryOut('PUTapi-v1-notifications--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-notifications--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/notifications/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/notifications/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-notifications--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-notifications--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-notifications--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the notification. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="PUTapi-v1-notifications--id-"
               value="17"
               data-component="body">
    <br>
<p>ID do usuário Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-v1-notifications--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Título da notificação Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>message</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="message"                data-endpoint="PUTapi-v1-notifications--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Mensagem Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="PUTapi-v1-notifications--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Tipo (info/warning/alert/success) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_read</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-v1-notifications--id-" style="display: none">
            <input type="radio" name="is_read"
                   value="true"
                   data-endpoint="PUTapi-v1-notifications--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-v1-notifications--id-" style="display: none">
            <input type="radio" name="is_read"
                   value="false"
                   data-endpoint="PUTapi-v1-notifications--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Lido Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="notificacoes-DELETEapi-v1-notifications--id-">DELETE api/v1/notifications/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-notifications--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/notifications/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/notifications/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-notifications--id-">
</span>
<span id="execution-results-DELETEapi-v1-notifications--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-notifications--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-notifications--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-notifications--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-notifications--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-notifications--id-" data-method="DELETE"
      data-path="api/v1/notifications/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-notifications--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-notifications--id-"
                    onclick="tryItOut('DELETEapi-v1-notifications--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-notifications--id-"
                    onclick="cancelTryOut('DELETEapi-v1-notifications--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-notifications--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/notifications/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-notifications--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-notifications--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-notifications--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the notification. Example: <code>consequatur</code></p>
            </div>
                    </form>

                <h1 id="participantes-de-eventos">Participantes de Eventos</h1>

    <p>API para gerenciamento de participantes de eventos</p>

                                <h2 id="participantes-de-eventos-GETapi-v1-event-participants">GET api/v1/event-participants</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-event-participants">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/event-participants" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/event-participants"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-event-participants">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: http://localhost:3000
access-control-allow-credentials: true
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-event-participants" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-event-participants"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-event-participants"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-event-participants" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-event-participants">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-event-participants" data-method="GET"
      data-path="api/v1/event-participants"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-event-participants', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-event-participants"
                    onclick="tryItOut('GETapi-v1-event-participants');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-event-participants"
                    onclick="cancelTryOut('GETapi-v1-event-participants');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-event-participants"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/event-participants</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-event-participants"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-event-participants"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="participantes-de-eventos-POSTapi-v1-event-participants">POST api/v1/event-participants</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-event-participants">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/event-participants" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"event_id\": 17,
    \"user_id\": 17,
    \"status\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/event-participants"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "event_id": 17,
    "user_id": 17,
    "status": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-event-participants">
</span>
<span id="execution-results-POSTapi-v1-event-participants" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-event-participants"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-event-participants"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-event-participants" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-event-participants">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-event-participants" data-method="POST"
      data-path="api/v1/event-participants"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-event-participants', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-event-participants"
                    onclick="tryItOut('POSTapi-v1-event-participants');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-event-participants"
                    onclick="cancelTryOut('POSTapi-v1-event-participants');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-event-participants"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/event-participants</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-event-participants"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-event-participants"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>event_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="event_id"                data-endpoint="POSTapi-v1-event-participants"
               value="17"
               data-component="body">
    <br>
<p>ID do evento Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="POSTapi-v1-event-participants"
               value="17"
               data-component="body">
    <br>
<p>ID do usuário Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-v1-event-participants"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (confirmed/pending/declined) Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="participantes-de-eventos-GETapi-v1-event-participants--id-">GET api/v1/event-participants/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-event-participants--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/event-participants/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/event-participants/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-event-participants--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: http://localhost:3000
access-control-allow-credentials: true
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-event-participants--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-event-participants--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-event-participants--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-event-participants--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-event-participants--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-event-participants--id-" data-method="GET"
      data-path="api/v1/event-participants/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-event-participants--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-event-participants--id-"
                    onclick="tryItOut('GETapi-v1-event-participants--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-event-participants--id-"
                    onclick="cancelTryOut('GETapi-v1-event-participants--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-event-participants--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/event-participants/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-event-participants--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-event-participants--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-event-participants--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the event participant. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="participantes-de-eventos-PUTapi-v1-event-participants--id-">PUT api/v1/event-participants/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-event-participants--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/event-participants/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"event_id\": 17,
    \"user_id\": 17,
    \"status\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/event-participants/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "event_id": 17,
    "user_id": 17,
    "status": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-event-participants--id-">
</span>
<span id="execution-results-PUTapi-v1-event-participants--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-event-participants--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-event-participants--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-event-participants--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-event-participants--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-event-participants--id-" data-method="PUT"
      data-path="api/v1/event-participants/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-event-participants--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-event-participants--id-"
                    onclick="tryItOut('PUTapi-v1-event-participants--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-event-participants--id-"
                    onclick="cancelTryOut('PUTapi-v1-event-participants--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-event-participants--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/event-participants/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/event-participants/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-event-participants--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-event-participants--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-event-participants--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the event participant. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>event_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="event_id"                data-endpoint="PUTapi-v1-event-participants--id-"
               value="17"
               data-component="body">
    <br>
<p>ID do evento Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="PUTapi-v1-event-participants--id-"
               value="17"
               data-component="body">
    <br>
<p>ID do usuário Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-v1-event-participants--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (confirmed/pending/declined) Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="participantes-de-eventos-DELETEapi-v1-event-participants--id-">DELETE api/v1/event-participants/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-event-participants--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/event-participants/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/event-participants/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-event-participants--id-">
</span>
<span id="execution-results-DELETEapi-v1-event-participants--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-event-participants--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-event-participants--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-event-participants--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-event-participants--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-event-participants--id-" data-method="DELETE"
      data-path="api/v1/event-participants/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-event-participants--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-event-participants--id-"
                    onclick="tryItOut('DELETEapi-v1-event-participants--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-event-participants--id-"
                    onclick="cancelTryOut('DELETEapi-v1-event-participants--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-event-participants--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/event-participants/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-event-participants--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-event-participants--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-event-participants--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the event participant. Example: <code>consequatur</code></p>
            </div>
                    </form>

                <h1 id="presencas">Presenças</h1>

    <p>API para gerenciamento de presenças</p>

                                <h2 id="presencas-GETapi-v1-teacher-attendance">GET api/v1/teacher/attendance</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-teacher-attendance">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/teacher/attendance" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/attendance"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-teacher-attendance">
    </span>
<span id="execution-results-GETapi-v1-teacher-attendance" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-teacher-attendance"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-teacher-attendance"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-teacher-attendance" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-teacher-attendance">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-teacher-attendance" data-method="GET"
      data-path="api/v1/teacher/attendance"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-teacher-attendance', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-teacher-attendance"
                    onclick="tryItOut('GETapi-v1-teacher-attendance');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-teacher-attendance"
                    onclick="cancelTryOut('GETapi-v1-teacher-attendance');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-teacher-attendance"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/teacher/attendance</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-teacher-attendance"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-teacher-attendance"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="presencas-POSTapi-v1-teacher-attendance">POST api/v1/teacher/attendance</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-teacher-attendance">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/teacher/attendance" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"student_id\": 17,
    \"class_id\": 17,
    \"subject_id\": 17,
    \"attendance_date\": \"consequatur\",
    \"status\": \"consequatur\",
    \"notes\": \"consequatur\",
    \"recorded_by\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/attendance"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "student_id": 17,
    "class_id": 17,
    "subject_id": 17,
    "attendance_date": "consequatur",
    "status": "consequatur",
    "notes": "consequatur",
    "recorded_by": 17
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-teacher-attendance">
</span>
<span id="execution-results-POSTapi-v1-teacher-attendance" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-teacher-attendance"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-teacher-attendance"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-teacher-attendance" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-teacher-attendance">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-teacher-attendance" data-method="POST"
      data-path="api/v1/teacher/attendance"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-teacher-attendance', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-teacher-attendance"
                    onclick="tryItOut('POSTapi-v1-teacher-attendance');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-teacher-attendance"
                    onclick="cancelTryOut('POSTapi-v1-teacher-attendance');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-teacher-attendance"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/teacher/attendance</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-teacher-attendance"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-teacher-attendance"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>student_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="student_id"                data-endpoint="POSTapi-v1-teacher-attendance"
               value="17"
               data-component="body">
    <br>
<p>ID do estudante Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>class_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="class_id"                data-endpoint="POSTapi-v1-teacher-attendance"
               value="17"
               data-component="body">
    <br>
<p>ID da turma Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>subject_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="subject_id"                data-endpoint="POSTapi-v1-teacher-attendance"
               value="17"
               data-component="body">
    <br>
<p>ID da disciplina Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>attendance_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="attendance_date"                data-endpoint="POSTapi-v1-teacher-attendance"
               value="consequatur"
               data-component="body">
    <br>
<p>Data da presença Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-v1-teacher-attendance"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (present/absent/late/excused) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="POSTapi-v1-teacher-attendance"
               value="consequatur"
               data-component="body">
    <br>
<p>Notas Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>recorded_by</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="recorded_by"                data-endpoint="POSTapi-v1-teacher-attendance"
               value="17"
               data-component="body">
    <br>
<p>ID do professor que registrou Example: <code>17</code></p>
        </div>
        </form>

                    <h2 id="presencas-GETapi-v1-teacher-attendance--id-">GET api/v1/teacher/attendance/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-teacher-attendance--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/teacher/attendance/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/attendance/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-teacher-attendance--id-">
    </span>
<span id="execution-results-GETapi-v1-teacher-attendance--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-teacher-attendance--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-teacher-attendance--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-teacher-attendance--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-teacher-attendance--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-teacher-attendance--id-" data-method="GET"
      data-path="api/v1/teacher/attendance/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-teacher-attendance--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-teacher-attendance--id-"
                    onclick="tryItOut('GETapi-v1-teacher-attendance--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-teacher-attendance--id-"
                    onclick="cancelTryOut('GETapi-v1-teacher-attendance--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-teacher-attendance--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/teacher/attendance/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-teacher-attendance--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-teacher-attendance--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-teacher-attendance--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the attendance. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="presencas-PUTapi-v1-teacher-attendance--id-">PUT api/v1/teacher/attendance/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-teacher-attendance--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/teacher/attendance/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"student_id\": 17,
    \"class_id\": 17,
    \"subject_id\": 17,
    \"attendance_date\": \"consequatur\",
    \"status\": \"consequatur\",
    \"notes\": \"consequatur\",
    \"recorded_by\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/attendance/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "student_id": 17,
    "class_id": 17,
    "subject_id": 17,
    "attendance_date": "consequatur",
    "status": "consequatur",
    "notes": "consequatur",
    "recorded_by": 17
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-teacher-attendance--id-">
</span>
<span id="execution-results-PUTapi-v1-teacher-attendance--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-teacher-attendance--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-teacher-attendance--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-teacher-attendance--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-teacher-attendance--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-teacher-attendance--id-" data-method="PUT"
      data-path="api/v1/teacher/attendance/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-teacher-attendance--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-teacher-attendance--id-"
                    onclick="tryItOut('PUTapi-v1-teacher-attendance--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-teacher-attendance--id-"
                    onclick="cancelTryOut('PUTapi-v1-teacher-attendance--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-teacher-attendance--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/teacher/attendance/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/teacher/attendance/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-teacher-attendance--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-teacher-attendance--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-teacher-attendance--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the attendance. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>student_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="student_id"                data-endpoint="PUTapi-v1-teacher-attendance--id-"
               value="17"
               data-component="body">
    <br>
<p>ID do estudante Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>class_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="class_id"                data-endpoint="PUTapi-v1-teacher-attendance--id-"
               value="17"
               data-component="body">
    <br>
<p>ID da turma Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>subject_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="subject_id"                data-endpoint="PUTapi-v1-teacher-attendance--id-"
               value="17"
               data-component="body">
    <br>
<p>ID da disciplina Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>attendance_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="attendance_date"                data-endpoint="PUTapi-v1-teacher-attendance--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Data da presença Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-v1-teacher-attendance--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (present/absent/late/excused) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="PUTapi-v1-teacher-attendance--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Notas Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>recorded_by</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="recorded_by"                data-endpoint="PUTapi-v1-teacher-attendance--id-"
               value="17"
               data-component="body">
    <br>
<p>ID do professor que registrou Example: <code>17</code></p>
        </div>
        </form>

                    <h2 id="presencas-DELETEapi-v1-teacher-attendance--id-">DELETE api/v1/teacher/attendance/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-teacher-attendance--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/teacher/attendance/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/attendance/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-teacher-attendance--id-">
</span>
<span id="execution-results-DELETEapi-v1-teacher-attendance--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-teacher-attendance--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-teacher-attendance--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-teacher-attendance--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-teacher-attendance--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-teacher-attendance--id-" data-method="DELETE"
      data-path="api/v1/teacher/attendance/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-teacher-attendance--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-teacher-attendance--id-"
                    onclick="tryItOut('DELETEapi-v1-teacher-attendance--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-teacher-attendance--id-"
                    onclick="cancelTryOut('DELETEapi-v1-teacher-attendance--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-teacher-attendance--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/teacher/attendance/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-teacher-attendance--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-teacher-attendance--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-teacher-attendance--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the attendance. Example: <code>consequatur</code></p>
            </div>
                    </form>

                <h1 id="professores">Professores</h1>

    <p>API para gerenciamento de professores</p>

                                <h2 id="professores-GETapi-v1-teacher-teachers">GET api/v1/teacher/teachers</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-teacher-teachers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/teacher/teachers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/teachers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-teacher-teachers">
    </span>
<span id="execution-results-GETapi-v1-teacher-teachers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-teacher-teachers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-teacher-teachers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-teacher-teachers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-teacher-teachers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-teacher-teachers" data-method="GET"
      data-path="api/v1/teacher/teachers"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-teacher-teachers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-teacher-teachers"
                    onclick="tryItOut('GETapi-v1-teacher-teachers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-teacher-teachers"
                    onclick="cancelTryOut('GETapi-v1-teacher-teachers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-teacher-teachers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/teacher/teachers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-teacher-teachers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-teacher-teachers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="professores-POSTapi-v1-teacher-teachers">POST api/v1/teacher/teachers</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-teacher-teachers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/teacher/teachers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_id\": 17,
    \"teacher_number\": \"consequatur\",
    \"first_name\": \"consequatur\",
    \"last_name\": \"consequatur\",
    \"date_of_birth\": \"consequatur\",
    \"gender\": \"consequatur\",
    \"phone\": \"consequatur\",
    \"address\": \"consequatur\",
    \"hire_date\": \"consequatur\",
    \"qualification\": \"consequatur\",
    \"specialization\": \"consequatur\",
    \"experience_years\": 17,
    \"salary\": 11613.31890586,
    \"profile_picture\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/teachers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 17,
    "teacher_number": "consequatur",
    "first_name": "consequatur",
    "last_name": "consequatur",
    "date_of_birth": "consequatur",
    "gender": "consequatur",
    "phone": "consequatur",
    "address": "consequatur",
    "hire_date": "consequatur",
    "qualification": "consequatur",
    "specialization": "consequatur",
    "experience_years": 17,
    "salary": 11613.31890586,
    "profile_picture": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-teacher-teachers">
</span>
<span id="execution-results-POSTapi-v1-teacher-teachers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-teacher-teachers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-teacher-teachers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-teacher-teachers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-teacher-teachers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-teacher-teachers" data-method="POST"
      data-path="api/v1/teacher/teachers"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-teacher-teachers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-teacher-teachers"
                    onclick="tryItOut('POSTapi-v1-teacher-teachers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-teacher-teachers"
                    onclick="cancelTryOut('POSTapi-v1-teacher-teachers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-teacher-teachers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/teacher/teachers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-teacher-teachers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-teacher-teachers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="POSTapi-v1-teacher-teachers"
               value="17"
               data-component="body">
    <br>
<p>ID do usuário associado Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>teacher_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="teacher_number"                data-endpoint="POSTapi-v1-teacher-teachers"
               value="consequatur"
               data-component="body">
    <br>
<p>Número do professor Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>first_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="first_name"                data-endpoint="POSTapi-v1-teacher-teachers"
               value="consequatur"
               data-component="body">
    <br>
<p>Primeiro nome Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="last_name"                data-endpoint="POSTapi-v1-teacher-teachers"
               value="consequatur"
               data-component="body">
    <br>
<p>Último nome Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>date_of_birth</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="date_of_birth"                data-endpoint="POSTapi-v1-teacher-teachers"
               value="consequatur"
               data-component="body">
    <br>
<p>Data de nascimento Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>gender</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="gender"                data-endpoint="POSTapi-v1-teacher-teachers"
               value="consequatur"
               data-component="body">
    <br>
<p>Gênero (M/F) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-v1-teacher-teachers"
               value="consequatur"
               data-component="body">
    <br>
<p>Telefone Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="address"                data-endpoint="POSTapi-v1-teacher-teachers"
               value="consequatur"
               data-component="body">
    <br>
<p>Endereço Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>hire_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="hire_date"                data-endpoint="POSTapi-v1-teacher-teachers"
               value="consequatur"
               data-component="body">
    <br>
<p>Data de contratação Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>qualification</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="qualification"                data-endpoint="POSTapi-v1-teacher-teachers"
               value="consequatur"
               data-component="body">
    <br>
<p>Qualificação Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>specialization</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="specialization"                data-endpoint="POSTapi-v1-teacher-teachers"
               value="consequatur"
               data-component="body">
    <br>
<p>Especialização Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>experience_years</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="experience_years"                data-endpoint="POSTapi-v1-teacher-teachers"
               value="17"
               data-component="body">
    <br>
<p>Anos de experiência Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>salary</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="salary"                data-endpoint="POSTapi-v1-teacher-teachers"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Salário Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>profile_picture</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="profile_picture"                data-endpoint="POSTapi-v1-teacher-teachers"
               value="consequatur"
               data-component="body">
    <br>
<p>URL da foto de perfil Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="professores-GETapi-v1-teacher-teachers--id-">GET api/v1/teacher/teachers/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-teacher-teachers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/teacher/teachers/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/teachers/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-teacher-teachers--id-">
    </span>
<span id="execution-results-GETapi-v1-teacher-teachers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-teacher-teachers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-teacher-teachers--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-teacher-teachers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-teacher-teachers--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-teacher-teachers--id-" data-method="GET"
      data-path="api/v1/teacher/teachers/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-teacher-teachers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-teacher-teachers--id-"
                    onclick="tryItOut('GETapi-v1-teacher-teachers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-teacher-teachers--id-"
                    onclick="cancelTryOut('GETapi-v1-teacher-teachers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-teacher-teachers--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/teacher/teachers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-teacher-teachers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-teacher-teachers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-teacher-teachers--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the teacher. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="professores-PUTapi-v1-teacher-teachers--id-">PUT api/v1/teacher/teachers/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-teacher-teachers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/teacher/teachers/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"teacher_number\": \"consequatur\",
    \"first_name\": \"consequatur\",
    \"last_name\": \"consequatur\",
    \"date_of_birth\": \"consequatur\",
    \"gender\": \"consequatur\",
    \"phone\": \"consequatur\",
    \"address\": \"consequatur\",
    \"hire_date\": \"consequatur\",
    \"qualification\": \"consequatur\",
    \"specialization\": \"consequatur\",
    \"experience_years\": 17,
    \"salary\": 11613.31890586,
    \"profile_picture\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/teachers/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "teacher_number": "consequatur",
    "first_name": "consequatur",
    "last_name": "consequatur",
    "date_of_birth": "consequatur",
    "gender": "consequatur",
    "phone": "consequatur",
    "address": "consequatur",
    "hire_date": "consequatur",
    "qualification": "consequatur",
    "specialization": "consequatur",
    "experience_years": 17,
    "salary": 11613.31890586,
    "profile_picture": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-teacher-teachers--id-">
</span>
<span id="execution-results-PUTapi-v1-teacher-teachers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-teacher-teachers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-teacher-teachers--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-teacher-teachers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-teacher-teachers--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-teacher-teachers--id-" data-method="PUT"
      data-path="api/v1/teacher/teachers/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-teacher-teachers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-teacher-teachers--id-"
                    onclick="tryItOut('PUTapi-v1-teacher-teachers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-teacher-teachers--id-"
                    onclick="cancelTryOut('PUTapi-v1-teacher-teachers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-teacher-teachers--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/teacher/teachers/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/teacher/teachers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-teacher-teachers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-teacher-teachers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-teacher-teachers--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the teacher. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>teacher_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="teacher_number"                data-endpoint="PUTapi-v1-teacher-teachers--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Número do professor Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>first_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="first_name"                data-endpoint="PUTapi-v1-teacher-teachers--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Primeiro nome Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="last_name"                data-endpoint="PUTapi-v1-teacher-teachers--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Último nome Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>date_of_birth</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="date_of_birth"                data-endpoint="PUTapi-v1-teacher-teachers--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Data de nascimento Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>gender</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="gender"                data-endpoint="PUTapi-v1-teacher-teachers--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Gênero (M/F) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="PUTapi-v1-teacher-teachers--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Telefone Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="address"                data-endpoint="PUTapi-v1-teacher-teachers--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Endereço Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>hire_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="hire_date"                data-endpoint="PUTapi-v1-teacher-teachers--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Data de contratação Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>qualification</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="qualification"                data-endpoint="PUTapi-v1-teacher-teachers--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Qualificação Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>specialization</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="specialization"                data-endpoint="PUTapi-v1-teacher-teachers--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Especialização Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>experience_years</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="experience_years"                data-endpoint="PUTapi-v1-teacher-teachers--id-"
               value="17"
               data-component="body">
    <br>
<p>Anos de experiência Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>salary</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="salary"                data-endpoint="PUTapi-v1-teacher-teachers--id-"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Salário Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>profile_picture</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="profile_picture"                data-endpoint="PUTapi-v1-teacher-teachers--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>URL da foto de perfil Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="professores-DELETEapi-v1-teacher-teachers--id-">DELETE api/v1/teacher/teachers/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-teacher-teachers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/teacher/teachers/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/teachers/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-teacher-teachers--id-">
</span>
<span id="execution-results-DELETEapi-v1-teacher-teachers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-teacher-teachers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-teacher-teachers--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-teacher-teachers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-teacher-teachers--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-teacher-teachers--id-" data-method="DELETE"
      data-path="api/v1/teacher/teachers/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-teacher-teachers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-teacher-teachers--id-"
                    onclick="tryItOut('DELETEapi-v1-teacher-teachers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-teacher-teachers--id-"
                    onclick="cancelTryOut('DELETEapi-v1-teacher-teachers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-teacher-teachers--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/teacher/teachers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-teacher-teachers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-teacher-teachers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-teacher-teachers--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the teacher. Example: <code>consequatur</code></p>
            </div>
                    </form>

                <h1 id="questoes-de-atividades">Questões de Atividades</h1>

    <p>API para gerenciamento de questões de atividades</p>

                                <h2 id="questoes-de-atividades-GETapi-v1-teacher-activity-questions">GET api/v1/teacher/activity-questions</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-teacher-activity-questions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/teacher/activity-questions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/activity-questions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-teacher-activity-questions">
    </span>
<span id="execution-results-GETapi-v1-teacher-activity-questions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-teacher-activity-questions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-teacher-activity-questions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-teacher-activity-questions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-teacher-activity-questions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-teacher-activity-questions" data-method="GET"
      data-path="api/v1/teacher/activity-questions"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-teacher-activity-questions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-teacher-activity-questions"
                    onclick="tryItOut('GETapi-v1-teacher-activity-questions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-teacher-activity-questions"
                    onclick="cancelTryOut('GETapi-v1-teacher-activity-questions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-teacher-activity-questions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/teacher/activity-questions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-teacher-activity-questions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-teacher-activity-questions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="questoes-de-atividades-POSTapi-v1-teacher-activity-questions">POST api/v1/teacher/activity-questions</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-teacher-activity-questions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/teacher/activity-questions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"activity_id\": 17,
    \"question_text\": \"consequatur\",
    \"question_type\": \"consequatur\",
    \"points\": 11613.31890586,
    \"order_number\": 17,
    \"options\": \"consequatur\",
    \"correct_answer\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/activity-questions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "activity_id": 17,
    "question_text": "consequatur",
    "question_type": "consequatur",
    "points": 11613.31890586,
    "order_number": 17,
    "options": "consequatur",
    "correct_answer": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-teacher-activity-questions">
</span>
<span id="execution-results-POSTapi-v1-teacher-activity-questions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-teacher-activity-questions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-teacher-activity-questions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-teacher-activity-questions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-teacher-activity-questions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-teacher-activity-questions" data-method="POST"
      data-path="api/v1/teacher/activity-questions"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-teacher-activity-questions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-teacher-activity-questions"
                    onclick="tryItOut('POSTapi-v1-teacher-activity-questions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-teacher-activity-questions"
                    onclick="cancelTryOut('POSTapi-v1-teacher-activity-questions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-teacher-activity-questions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/teacher/activity-questions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-teacher-activity-questions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-teacher-activity-questions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>activity_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="activity_id"                data-endpoint="POSTapi-v1-teacher-activity-questions"
               value="17"
               data-component="body">
    <br>
<p>ID da atividade Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>question_text</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="question_text"                data-endpoint="POSTapi-v1-teacher-activity-questions"
               value="consequatur"
               data-component="body">
    <br>
<p>Texto da questão Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>question_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="question_type"                data-endpoint="POSTapi-v1-teacher-activity-questions"
               value="consequatur"
               data-component="body">
    <br>
<p>Tipo da questão (multiple_choice/true_false/short_answer/essay) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>points</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="points"                data-endpoint="POSTapi-v1-teacher-activity-questions"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Pontos Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>order_number</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="order_number"                data-endpoint="POSTapi-v1-teacher-activity-questions"
               value="17"
               data-component="body">
    <br>
<p>Número de ordem Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>options</code></b>&nbsp;&nbsp;
<small>json</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="options"                data-endpoint="POSTapi-v1-teacher-activity-questions"
               value="consequatur"
               data-component="body">
    <br>
<p>Opções (para múltipla escolha) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>correct_answer</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="correct_answer"                data-endpoint="POSTapi-v1-teacher-activity-questions"
               value="consequatur"
               data-component="body">
    <br>
<p>Resposta correta Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="questoes-de-atividades-GETapi-v1-teacher-activity-questions--id-">GET api/v1/teacher/activity-questions/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-teacher-activity-questions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/teacher/activity-questions/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/activity-questions/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-teacher-activity-questions--id-">
    </span>
<span id="execution-results-GETapi-v1-teacher-activity-questions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-teacher-activity-questions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-teacher-activity-questions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-teacher-activity-questions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-teacher-activity-questions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-teacher-activity-questions--id-" data-method="GET"
      data-path="api/v1/teacher/activity-questions/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-teacher-activity-questions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-teacher-activity-questions--id-"
                    onclick="tryItOut('GETapi-v1-teacher-activity-questions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-teacher-activity-questions--id-"
                    onclick="cancelTryOut('GETapi-v1-teacher-activity-questions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-teacher-activity-questions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/teacher/activity-questions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-teacher-activity-questions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-teacher-activity-questions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-teacher-activity-questions--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the activity question. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="questoes-de-atividades-PUTapi-v1-teacher-activity-questions--id-">PUT api/v1/teacher/activity-questions/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-teacher-activity-questions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/teacher/activity-questions/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"activity_id\": 17,
    \"question_text\": \"consequatur\",
    \"question_type\": \"consequatur\",
    \"points\": 11613.31890586,
    \"order_number\": 17,
    \"options\": \"consequatur\",
    \"correct_answer\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/activity-questions/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "activity_id": 17,
    "question_text": "consequatur",
    "question_type": "consequatur",
    "points": 11613.31890586,
    "order_number": 17,
    "options": "consequatur",
    "correct_answer": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-teacher-activity-questions--id-">
</span>
<span id="execution-results-PUTapi-v1-teacher-activity-questions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-teacher-activity-questions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-teacher-activity-questions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-teacher-activity-questions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-teacher-activity-questions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-teacher-activity-questions--id-" data-method="PUT"
      data-path="api/v1/teacher/activity-questions/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-teacher-activity-questions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-teacher-activity-questions--id-"
                    onclick="tryItOut('PUTapi-v1-teacher-activity-questions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-teacher-activity-questions--id-"
                    onclick="cancelTryOut('PUTapi-v1-teacher-activity-questions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-teacher-activity-questions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/teacher/activity-questions/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/teacher/activity-questions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-teacher-activity-questions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-teacher-activity-questions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-teacher-activity-questions--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the activity question. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>activity_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="activity_id"                data-endpoint="PUTapi-v1-teacher-activity-questions--id-"
               value="17"
               data-component="body">
    <br>
<p>ID da atividade Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>question_text</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="question_text"                data-endpoint="PUTapi-v1-teacher-activity-questions--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Texto da questão Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>question_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="question_type"                data-endpoint="PUTapi-v1-teacher-activity-questions--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Tipo da questão (multiple_choice/true_false/short_answer/essay) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>points</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="points"                data-endpoint="PUTapi-v1-teacher-activity-questions--id-"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Pontos Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>order_number</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="order_number"                data-endpoint="PUTapi-v1-teacher-activity-questions--id-"
               value="17"
               data-component="body">
    <br>
<p>Número de ordem Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>options</code></b>&nbsp;&nbsp;
<small>json</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="options"                data-endpoint="PUTapi-v1-teacher-activity-questions--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Opções (para múltipla escolha) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>correct_answer</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="correct_answer"                data-endpoint="PUTapi-v1-teacher-activity-questions--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Resposta correta Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="questoes-de-atividades-DELETEapi-v1-teacher-activity-questions--id-">DELETE api/v1/teacher/activity-questions/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-teacher-activity-questions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/teacher/activity-questions/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/teacher/activity-questions/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-teacher-activity-questions--id-">
</span>
<span id="execution-results-DELETEapi-v1-teacher-activity-questions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-teacher-activity-questions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-teacher-activity-questions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-teacher-activity-questions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-teacher-activity-questions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-teacher-activity-questions--id-" data-method="DELETE"
      data-path="api/v1/teacher/activity-questions/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-teacher-activity-questions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-teacher-activity-questions--id-"
                    onclick="tryItOut('DELETEapi-v1-teacher-activity-questions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-teacher-activity-questions--id-"
                    onclick="cancelTryOut('DELETEapi-v1-teacher-activity-questions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-teacher-activity-questions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/teacher/activity-questions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-teacher-activity-questions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-teacher-activity-questions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-teacher-activity-questions--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the activity question. Example: <code>consequatur</code></p>
            </div>
                    </form>

                <h1 id="respostas-de-forum">Respostas de Fórum</h1>

    <p>API para gerenciamento de respostas de fórum</p>

                                <h2 id="respostas-de-forum-GETapi-v1-forum-replies">GET api/v1/forum-replies</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-forum-replies">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/forum-replies" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/forum-replies"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-forum-replies">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: http://localhost:3000
access-control-allow-credentials: true
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-forum-replies" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-forum-replies"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-forum-replies"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-forum-replies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-forum-replies">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-forum-replies" data-method="GET"
      data-path="api/v1/forum-replies"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-forum-replies', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-forum-replies"
                    onclick="tryItOut('GETapi-v1-forum-replies');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-forum-replies"
                    onclick="cancelTryOut('GETapi-v1-forum-replies');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-forum-replies"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/forum-replies</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-forum-replies"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-forum-replies"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="respostas-de-forum-POSTapi-v1-forum-replies">POST api/v1/forum-replies</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-forum-replies">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/forum-replies" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"topic_id\": 17,
    \"author_id\": 17,
    \"content\": \"consequatur\",
    \"parent_reply_id\": 17,
    \"status\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/forum-replies"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "topic_id": 17,
    "author_id": 17,
    "content": "consequatur",
    "parent_reply_id": 17,
    "status": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-forum-replies">
</span>
<span id="execution-results-POSTapi-v1-forum-replies" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-forum-replies"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-forum-replies"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-forum-replies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-forum-replies">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-forum-replies" data-method="POST"
      data-path="api/v1/forum-replies"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-forum-replies', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-forum-replies"
                    onclick="tryItOut('POSTapi-v1-forum-replies');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-forum-replies"
                    onclick="cancelTryOut('POSTapi-v1-forum-replies');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-forum-replies"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/forum-replies</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-forum-replies"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-forum-replies"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>topic_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="topic_id"                data-endpoint="POSTapi-v1-forum-replies"
               value="17"
               data-component="body">
    <br>
<p>ID do tópico Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>author_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="author_id"                data-endpoint="POSTapi-v1-forum-replies"
               value="17"
               data-component="body">
    <br>
<p>ID do autor Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="content"                data-endpoint="POSTapi-v1-forum-replies"
               value="consequatur"
               data-component="body">
    <br>
<p>Conteúdo Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>parent_reply_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="parent_reply_id"                data-endpoint="POSTapi-v1-forum-replies"
               value="17"
               data-component="body">
    <br>
<p>ID da resposta pai Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-v1-forum-replies"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (active/deleted) Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="respostas-de-forum-GETapi-v1-forum-replies--id-">GET api/v1/forum-replies/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-forum-replies--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/forum-replies/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/forum-replies/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-forum-replies--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: http://localhost:3000
access-control-allow-credentials: true
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-forum-replies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-forum-replies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-forum-replies--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-forum-replies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-forum-replies--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-forum-replies--id-" data-method="GET"
      data-path="api/v1/forum-replies/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-forum-replies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-forum-replies--id-"
                    onclick="tryItOut('GETapi-v1-forum-replies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-forum-replies--id-"
                    onclick="cancelTryOut('GETapi-v1-forum-replies--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-forum-replies--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/forum-replies/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-forum-replies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-forum-replies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-forum-replies--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the forum reply. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="respostas-de-forum-PUTapi-v1-forum-replies--id-">PUT api/v1/forum-replies/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-forum-replies--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/forum-replies/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"topic_id\": 17,
    \"author_id\": 17,
    \"content\": \"consequatur\",
    \"parent_reply_id\": 17,
    \"status\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/forum-replies/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "topic_id": 17,
    "author_id": 17,
    "content": "consequatur",
    "parent_reply_id": 17,
    "status": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-forum-replies--id-">
</span>
<span id="execution-results-PUTapi-v1-forum-replies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-forum-replies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-forum-replies--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-forum-replies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-forum-replies--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-forum-replies--id-" data-method="PUT"
      data-path="api/v1/forum-replies/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-forum-replies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-forum-replies--id-"
                    onclick="tryItOut('PUTapi-v1-forum-replies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-forum-replies--id-"
                    onclick="cancelTryOut('PUTapi-v1-forum-replies--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-forum-replies--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/forum-replies/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/forum-replies/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-forum-replies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-forum-replies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-forum-replies--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the forum reply. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>topic_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="topic_id"                data-endpoint="PUTapi-v1-forum-replies--id-"
               value="17"
               data-component="body">
    <br>
<p>ID do tópico Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>author_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="author_id"                data-endpoint="PUTapi-v1-forum-replies--id-"
               value="17"
               data-component="body">
    <br>
<p>ID do autor Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="content"                data-endpoint="PUTapi-v1-forum-replies--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Conteúdo Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>parent_reply_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="parent_reply_id"                data-endpoint="PUTapi-v1-forum-replies--id-"
               value="17"
               data-component="body">
    <br>
<p>ID da resposta pai Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-v1-forum-replies--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (active/deleted) Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="respostas-de-forum-DELETEapi-v1-forum-replies--id-">DELETE api/v1/forum-replies/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-forum-replies--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/forum-replies/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/forum-replies/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-forum-replies--id-">
</span>
<span id="execution-results-DELETEapi-v1-forum-replies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-forum-replies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-forum-replies--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-forum-replies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-forum-replies--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-forum-replies--id-" data-method="DELETE"
      data-path="api/v1/forum-replies/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-forum-replies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-forum-replies--id-"
                    onclick="tryItOut('DELETEapi-v1-forum-replies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-forum-replies--id-"
                    onclick="cancelTryOut('DELETEapi-v1-forum-replies--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-forum-replies--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/forum-replies/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-forum-replies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-forum-replies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-forum-replies--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the forum reply. Example: <code>consequatur</code></p>
            </div>
                    </form>

                <h1 id="respostas-de-submissoes">Respostas de Submissões</h1>

    <p>API para gerenciamento de respostas de submissões</p>

                                <h2 id="respostas-de-submissoes-GETapi-v1-student-submission-answers">GET api/v1/student/submission-answers</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-student-submission-answers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/student/submission-answers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/submission-answers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-student-submission-answers">
    </span>
<span id="execution-results-GETapi-v1-student-submission-answers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-student-submission-answers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-student-submission-answers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-student-submission-answers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-student-submission-answers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-student-submission-answers" data-method="GET"
      data-path="api/v1/student/submission-answers"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-student-submission-answers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-student-submission-answers"
                    onclick="tryItOut('GETapi-v1-student-submission-answers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-student-submission-answers"
                    onclick="cancelTryOut('GETapi-v1-student-submission-answers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-student-submission-answers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/student/submission-answers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-student-submission-answers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-student-submission-answers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="respostas-de-submissoes-POSTapi-v1-student-submission-answers">POST api/v1/student/submission-answers</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-student-submission-answers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/student/submission-answers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"submission_id\": 17,
    \"question_id\": 17,
    \"answer_text\": \"consequatur\",
    \"points_earned\": 11613.31890586,
    \"is_correct\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/submission-answers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "submission_id": 17,
    "question_id": 17,
    "answer_text": "consequatur",
    "points_earned": 11613.31890586,
    "is_correct": false
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-student-submission-answers">
</span>
<span id="execution-results-POSTapi-v1-student-submission-answers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-student-submission-answers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-student-submission-answers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-student-submission-answers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-student-submission-answers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-student-submission-answers" data-method="POST"
      data-path="api/v1/student/submission-answers"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-student-submission-answers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-student-submission-answers"
                    onclick="tryItOut('POSTapi-v1-student-submission-answers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-student-submission-answers"
                    onclick="cancelTryOut('POSTapi-v1-student-submission-answers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-student-submission-answers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/student/submission-answers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-student-submission-answers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-student-submission-answers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>submission_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="submission_id"                data-endpoint="POSTapi-v1-student-submission-answers"
               value="17"
               data-component="body">
    <br>
<p>ID da submissão Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>question_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="question_id"                data-endpoint="POSTapi-v1-student-submission-answers"
               value="17"
               data-component="body">
    <br>
<p>ID da questão Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>answer_text</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="answer_text"                data-endpoint="POSTapi-v1-student-submission-answers"
               value="consequatur"
               data-component="body">
    <br>
<p>Texto da resposta Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>points_earned</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="points_earned"                data-endpoint="POSTapi-v1-student-submission-answers"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Pontos obtidos Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_correct</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-v1-student-submission-answers" style="display: none">
            <input type="radio" name="is_correct"
                   value="true"
                   data-endpoint="POSTapi-v1-student-submission-answers"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-v1-student-submission-answers" style="display: none">
            <input type="radio" name="is_correct"
                   value="false"
                   data-endpoint="POSTapi-v1-student-submission-answers"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Resposta correta Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="respostas-de-submissoes-GETapi-v1-student-submission-answers--id-">GET api/v1/student/submission-answers/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-student-submission-answers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/student/submission-answers/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/submission-answers/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-student-submission-answers--id-">
    </span>
<span id="execution-results-GETapi-v1-student-submission-answers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-student-submission-answers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-student-submission-answers--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-student-submission-answers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-student-submission-answers--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-student-submission-answers--id-" data-method="GET"
      data-path="api/v1/student/submission-answers/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-student-submission-answers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-student-submission-answers--id-"
                    onclick="tryItOut('GETapi-v1-student-submission-answers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-student-submission-answers--id-"
                    onclick="cancelTryOut('GETapi-v1-student-submission-answers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-student-submission-answers--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/student/submission-answers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-student-submission-answers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-student-submission-answers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-student-submission-answers--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the submission answer. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="respostas-de-submissoes-PUTapi-v1-student-submission-answers--id-">PUT api/v1/student/submission-answers/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-student-submission-answers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/student/submission-answers/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"submission_id\": 17,
    \"question_id\": 17,
    \"answer_text\": \"consequatur\",
    \"points_earned\": 11613.31890586,
    \"is_correct\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/submission-answers/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "submission_id": 17,
    "question_id": 17,
    "answer_text": "consequatur",
    "points_earned": 11613.31890586,
    "is_correct": false
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-student-submission-answers--id-">
</span>
<span id="execution-results-PUTapi-v1-student-submission-answers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-student-submission-answers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-student-submission-answers--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-student-submission-answers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-student-submission-answers--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-student-submission-answers--id-" data-method="PUT"
      data-path="api/v1/student/submission-answers/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-student-submission-answers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-student-submission-answers--id-"
                    onclick="tryItOut('PUTapi-v1-student-submission-answers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-student-submission-answers--id-"
                    onclick="cancelTryOut('PUTapi-v1-student-submission-answers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-student-submission-answers--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/student/submission-answers/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/student/submission-answers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-student-submission-answers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-student-submission-answers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-student-submission-answers--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the submission answer. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>submission_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="submission_id"                data-endpoint="PUTapi-v1-student-submission-answers--id-"
               value="17"
               data-component="body">
    <br>
<p>ID da submissão Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>question_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="question_id"                data-endpoint="PUTapi-v1-student-submission-answers--id-"
               value="17"
               data-component="body">
    <br>
<p>ID da questão Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>answer_text</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="answer_text"                data-endpoint="PUTapi-v1-student-submission-answers--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Texto da resposta Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>points_earned</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="points_earned"                data-endpoint="PUTapi-v1-student-submission-answers--id-"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Pontos obtidos Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_correct</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-v1-student-submission-answers--id-" style="display: none">
            <input type="radio" name="is_correct"
                   value="true"
                   data-endpoint="PUTapi-v1-student-submission-answers--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-v1-student-submission-answers--id-" style="display: none">
            <input type="radio" name="is_correct"
                   value="false"
                   data-endpoint="PUTapi-v1-student-submission-answers--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Resposta correta Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="respostas-de-submissoes-DELETEapi-v1-student-submission-answers--id-">DELETE api/v1/student/submission-answers/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-student-submission-answers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/student/submission-answers/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/submission-answers/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-student-submission-answers--id-">
</span>
<span id="execution-results-DELETEapi-v1-student-submission-answers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-student-submission-answers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-student-submission-answers--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-student-submission-answers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-student-submission-answers--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-student-submission-answers--id-" data-method="DELETE"
      data-path="api/v1/student/submission-answers/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-student-submission-answers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-student-submission-answers--id-"
                    onclick="tryItOut('DELETEapi-v1-student-submission-answers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-student-submission-answers--id-"
                    onclick="cancelTryOut('DELETEapi-v1-student-submission-answers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-student-submission-answers--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/student/submission-answers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-student-submission-answers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-student-submission-answers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-student-submission-answers--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the submission answer. Example: <code>consequatur</code></p>
            </div>
                    </form>

                <h1 id="submissoes">Submissões</h1>

    <p>API para gerenciamento de submissões</p>

                                <h2 id="submissoes-GETapi-v1-student-submissions">GET api/v1/student/submissions</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-student-submissions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/student/submissions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/submissions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-student-submissions">
    </span>
<span id="execution-results-GETapi-v1-student-submissions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-student-submissions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-student-submissions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-student-submissions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-student-submissions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-student-submissions" data-method="GET"
      data-path="api/v1/student/submissions"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-student-submissions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-student-submissions"
                    onclick="tryItOut('GETapi-v1-student-submissions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-student-submissions"
                    onclick="cancelTryOut('GETapi-v1-student-submissions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-student-submissions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/student/submissions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-student-submissions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-student-submissions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="submissoes-POSTapi-v1-student-submissions">POST api/v1/student/submissions</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-student-submissions">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/student/submissions" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"activity_id\": 17,
    \"student_id\": 17,
    \"submission_date\": \"consequatur\",
    \"content\": \"consequatur\",
    \"attachments\": \"consequatur\",
    \"status\": \"consequatur\",
    \"grade\": 11613.31890586,
    \"feedback\": \"consequatur\",
    \"graded_by\": 17,
    \"graded_at\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/submissions"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "activity_id": 17,
    "student_id": 17,
    "submission_date": "consequatur",
    "content": "consequatur",
    "attachments": "consequatur",
    "status": "consequatur",
    "grade": 11613.31890586,
    "feedback": "consequatur",
    "graded_by": 17,
    "graded_at": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-student-submissions">
</span>
<span id="execution-results-POSTapi-v1-student-submissions" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-student-submissions"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-student-submissions"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-student-submissions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-student-submissions">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-student-submissions" data-method="POST"
      data-path="api/v1/student/submissions"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-student-submissions', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-student-submissions"
                    onclick="tryItOut('POSTapi-v1-student-submissions');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-student-submissions"
                    onclick="cancelTryOut('POSTapi-v1-student-submissions');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-student-submissions"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/student/submissions</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-student-submissions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-student-submissions"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>activity_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="activity_id"                data-endpoint="POSTapi-v1-student-submissions"
               value="17"
               data-component="body">
    <br>
<p>ID da atividade Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>student_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="student_id"                data-endpoint="POSTapi-v1-student-submissions"
               value="17"
               data-component="body">
    <br>
<p>ID do estudante Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>submission_date</code></b>&nbsp;&nbsp;
<small>datetime</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="submission_date"                data-endpoint="POSTapi-v1-student-submissions"
               value="consequatur"
               data-component="body">
    <br>
<p>Data de submissão Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="content"                data-endpoint="POSTapi-v1-student-submissions"
               value="consequatur"
               data-component="body">
    <br>
<p>Conteúdo Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>attachments</code></b>&nbsp;&nbsp;
<small>json</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="attachments"                data-endpoint="POSTapi-v1-student-submissions"
               value="consequatur"
               data-component="body">
    <br>
<p>Anexos Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-v1-student-submissions"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (submitted/graded/late) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>grade</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="grade"                data-endpoint="POSTapi-v1-student-submissions"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Nota Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>feedback</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="feedback"                data-endpoint="POSTapi-v1-student-submissions"
               value="consequatur"
               data-component="body">
    <br>
<p>Feedback Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>graded_by</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="graded_by"                data-endpoint="POSTapi-v1-student-submissions"
               value="17"
               data-component="body">
    <br>
<p>ID do professor que corrigiu Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>graded_at</code></b>&nbsp;&nbsp;
<small>datetime</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="graded_at"                data-endpoint="POSTapi-v1-student-submissions"
               value="consequatur"
               data-component="body">
    <br>
<p>Data de correção Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="submissoes-GETapi-v1-student-submissions--id-">GET api/v1/student/submissions/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-student-submissions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/student/submissions/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/submissions/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-student-submissions--id-">
    </span>
<span id="execution-results-GETapi-v1-student-submissions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-student-submissions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-student-submissions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-student-submissions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-student-submissions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-student-submissions--id-" data-method="GET"
      data-path="api/v1/student/submissions/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-student-submissions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-student-submissions--id-"
                    onclick="tryItOut('GETapi-v1-student-submissions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-student-submissions--id-"
                    onclick="cancelTryOut('GETapi-v1-student-submissions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-student-submissions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/student/submissions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-student-submissions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-student-submissions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-student-submissions--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the submission. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="submissoes-PUTapi-v1-student-submissions--id-">PUT api/v1/student/submissions/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-student-submissions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/student/submissions/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"activity_id\": 17,
    \"student_id\": 17,
    \"submission_date\": \"consequatur\",
    \"content\": \"consequatur\",
    \"attachments\": \"consequatur\",
    \"status\": \"consequatur\",
    \"grade\": 11613.31890586,
    \"feedback\": \"consequatur\",
    \"graded_by\": 17,
    \"graded_at\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/submissions/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "activity_id": 17,
    "student_id": 17,
    "submission_date": "consequatur",
    "content": "consequatur",
    "attachments": "consequatur",
    "status": "consequatur",
    "grade": 11613.31890586,
    "feedback": "consequatur",
    "graded_by": 17,
    "graded_at": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-student-submissions--id-">
</span>
<span id="execution-results-PUTapi-v1-student-submissions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-student-submissions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-student-submissions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-student-submissions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-student-submissions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-student-submissions--id-" data-method="PUT"
      data-path="api/v1/student/submissions/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-student-submissions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-student-submissions--id-"
                    onclick="tryItOut('PUTapi-v1-student-submissions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-student-submissions--id-"
                    onclick="cancelTryOut('PUTapi-v1-student-submissions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-student-submissions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/student/submissions/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/student/submissions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-student-submissions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-student-submissions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-student-submissions--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the submission. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>activity_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="activity_id"                data-endpoint="PUTapi-v1-student-submissions--id-"
               value="17"
               data-component="body">
    <br>
<p>ID da atividade Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>student_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="student_id"                data-endpoint="PUTapi-v1-student-submissions--id-"
               value="17"
               data-component="body">
    <br>
<p>ID do estudante Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>submission_date</code></b>&nbsp;&nbsp;
<small>datetime</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="submission_date"                data-endpoint="PUTapi-v1-student-submissions--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Data de submissão Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="content"                data-endpoint="PUTapi-v1-student-submissions--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Conteúdo Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>attachments</code></b>&nbsp;&nbsp;
<small>json</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="attachments"                data-endpoint="PUTapi-v1-student-submissions--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Anexos Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-v1-student-submissions--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (submitted/graded/late) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>grade</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="grade"                data-endpoint="PUTapi-v1-student-submissions--id-"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Nota Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>feedback</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="feedback"                data-endpoint="PUTapi-v1-student-submissions--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Feedback Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>graded_by</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="graded_by"                data-endpoint="PUTapi-v1-student-submissions--id-"
               value="17"
               data-component="body">
    <br>
<p>ID do professor que corrigiu Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>graded_at</code></b>&nbsp;&nbsp;
<small>datetime</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="graded_at"                data-endpoint="PUTapi-v1-student-submissions--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Data de correção Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="submissoes-DELETEapi-v1-student-submissions--id-">DELETE api/v1/student/submissions/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-student-submissions--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/student/submissions/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/student/submissions/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-student-submissions--id-">
</span>
<span id="execution-results-DELETEapi-v1-student-submissions--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-student-submissions--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-student-submissions--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-student-submissions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-student-submissions--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-student-submissions--id-" data-method="DELETE"
      data-path="api/v1/student/submissions/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-student-submissions--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-student-submissions--id-"
                    onclick="tryItOut('DELETEapi-v1-student-submissions--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-student-submissions--id-"
                    onclick="cancelTryOut('DELETEapi-v1-student-submissions--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-student-submissions--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/student/submissions/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-student-submissions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-student-submissions--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-student-submissions--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the submission. Example: <code>consequatur</code></p>
            </div>
                    </form>

                <h1 id="turmas">Turmas</h1>

    <p>API para gerenciamento de turmas</p>

                                <h2 id="turmas-GETapi-v1-admin-classes">GET api/v1/admin/classes</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-admin-classes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/admin/classes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/classes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-classes">
    </span>
<span id="execution-results-GETapi-v1-admin-classes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-classes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-classes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-classes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-classes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-classes" data-method="GET"
      data-path="api/v1/admin/classes"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-classes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-classes"
                    onclick="tryItOut('GETapi-v1-admin-classes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-classes"
                    onclick="cancelTryOut('GETapi-v1-admin-classes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-classes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/classes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-classes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-classes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="turmas-POSTapi-v1-admin-classes">POST api/v1/admin/classes</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-admin-classes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/admin/classes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"consequatur\",
    \"grade_level\": \"consequatur\",
    \"section\": \"consequatur\",
    \"school_id\": 17,
    \"academic_year\": \"consequatur\",
    \"max_students\": 17,
    \"status\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/classes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "consequatur",
    "grade_level": "consequatur",
    "section": "consequatur",
    "school_id": 17,
    "academic_year": "consequatur",
    "max_students": 17,
    "status": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-admin-classes">
</span>
<span id="execution-results-POSTapi-v1-admin-classes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-admin-classes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-admin-classes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-admin-classes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-admin-classes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-admin-classes" data-method="POST"
      data-path="api/v1/admin/classes"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-admin-classes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-admin-classes"
                    onclick="tryItOut('POSTapi-v1-admin-classes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-admin-classes"
                    onclick="cancelTryOut('POSTapi-v1-admin-classes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-admin-classes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/admin/classes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-admin-classes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-admin-classes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-v1-admin-classes"
               value="consequatur"
               data-component="body">
    <br>
<p>Nome da turma Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>grade_level</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="grade_level"                data-endpoint="POSTapi-v1-admin-classes"
               value="consequatur"
               data-component="body">
    <br>
<p>Nível escolar (10/11/12) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>section</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="section"                data-endpoint="POSTapi-v1-admin-classes"
               value="consequatur"
               data-component="body">
    <br>
<p>Seção Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>school_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="school_id"                data-endpoint="POSTapi-v1-admin-classes"
               value="17"
               data-component="body">
    <br>
<p>ID da escola Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>academic_year</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="academic_year"                data-endpoint="POSTapi-v1-admin-classes"
               value="consequatur"
               data-component="body">
    <br>
<p>Ano acadêmico (ex: 2024-2025) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>max_students</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="max_students"                data-endpoint="POSTapi-v1-admin-classes"
               value="17"
               data-component="body">
    <br>
<p>Máximo de estudantes Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-v1-admin-classes"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (active/inactive) Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="turmas-GETapi-v1-admin-classes--id-">GET api/v1/admin/classes/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-admin-classes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/admin/classes/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/classes/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-admin-classes--id-">
    </span>
<span id="execution-results-GETapi-v1-admin-classes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-admin-classes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-admin-classes--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-admin-classes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-admin-classes--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-admin-classes--id-" data-method="GET"
      data-path="api/v1/admin/classes/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-admin-classes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-admin-classes--id-"
                    onclick="tryItOut('GETapi-v1-admin-classes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-admin-classes--id-"
                    onclick="cancelTryOut('GETapi-v1-admin-classes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-admin-classes--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/admin/classes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-admin-classes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-admin-classes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-admin-classes--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the class. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="turmas-PUTapi-v1-admin-classes--id-">PUT api/v1/admin/classes/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-admin-classes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/admin/classes/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"consequatur\",
    \"grade_level\": \"consequatur\",
    \"section\": \"consequatur\",
    \"school_id\": 17,
    \"academic_year\": \"consequatur\",
    \"max_students\": 17,
    \"status\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/classes/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "consequatur",
    "grade_level": "consequatur",
    "section": "consequatur",
    "school_id": 17,
    "academic_year": "consequatur",
    "max_students": 17,
    "status": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-admin-classes--id-">
</span>
<span id="execution-results-PUTapi-v1-admin-classes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-admin-classes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-admin-classes--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-admin-classes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-admin-classes--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-admin-classes--id-" data-method="PUT"
      data-path="api/v1/admin/classes/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-admin-classes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-admin-classes--id-"
                    onclick="tryItOut('PUTapi-v1-admin-classes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-admin-classes--id-"
                    onclick="cancelTryOut('PUTapi-v1-admin-classes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-admin-classes--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/admin/classes/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/admin/classes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-admin-classes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-admin-classes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-admin-classes--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the class. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-v1-admin-classes--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Nome da turma Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>grade_level</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="grade_level"                data-endpoint="PUTapi-v1-admin-classes--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Nível escolar (10/11/12) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>section</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="section"                data-endpoint="PUTapi-v1-admin-classes--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Seção Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>school_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="school_id"                data-endpoint="PUTapi-v1-admin-classes--id-"
               value="17"
               data-component="body">
    <br>
<p>ID da escola Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>academic_year</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="academic_year"                data-endpoint="PUTapi-v1-admin-classes--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Ano acadêmico (ex: 2024-2025) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>max_students</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="max_students"                data-endpoint="PUTapi-v1-admin-classes--id-"
               value="17"
               data-component="body">
    <br>
<p>Máximo de estudantes Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-v1-admin-classes--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (active/inactive) Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="turmas-DELETEapi-v1-admin-classes--id-">DELETE api/v1/admin/classes/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-admin-classes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/admin/classes/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/admin/classes/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-admin-classes--id-">
</span>
<span id="execution-results-DELETEapi-v1-admin-classes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-admin-classes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-admin-classes--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-admin-classes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-admin-classes--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-admin-classes--id-" data-method="DELETE"
      data-path="api/v1/admin/classes/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-admin-classes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-admin-classes--id-"
                    onclick="tryItOut('DELETEapi-v1-admin-classes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-admin-classes--id-"
                    onclick="cancelTryOut('DELETEapi-v1-admin-classes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-admin-classes--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/admin/classes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-admin-classes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-admin-classes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-admin-classes--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the class. Example: <code>consequatur</code></p>
            </div>
                    </form>

                <h1 id="topicos-de-forum">Tópicos de Fórum</h1>

    <p>API para gerenciamento de tópicos de fórum</p>

                                <h2 id="topicos-de-forum-GETapi-v1-forum-topics">GET api/v1/forum-topics</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-forum-topics">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/forum-topics" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/forum-topics"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-forum-topics">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: http://localhost:3000
access-control-allow-credentials: true
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-forum-topics" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-forum-topics"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-forum-topics"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-forum-topics" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-forum-topics">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-forum-topics" data-method="GET"
      data-path="api/v1/forum-topics"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-forum-topics', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-forum-topics"
                    onclick="tryItOut('GETapi-v1-forum-topics');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-forum-topics"
                    onclick="cancelTryOut('GETapi-v1-forum-topics');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-forum-topics"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/forum-topics</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-forum-topics"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-forum-topics"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="topicos-de-forum-POSTapi-v1-forum-topics">POST api/v1/forum-topics</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-forum-topics">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/forum-topics" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"category_id\": 17,
    \"title\": \"consequatur\",
    \"content\": \"consequatur\",
    \"author_id\": 17,
    \"status\": \"consequatur\",
    \"views_count\": 17,
    \"replies_count\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/forum-topics"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_id": 17,
    "title": "consequatur",
    "content": "consequatur",
    "author_id": 17,
    "status": "consequatur",
    "views_count": 17,
    "replies_count": 17
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-forum-topics">
</span>
<span id="execution-results-POSTapi-v1-forum-topics" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-forum-topics"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-forum-topics"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-forum-topics" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-forum-topics">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-forum-topics" data-method="POST"
      data-path="api/v1/forum-topics"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-forum-topics', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-forum-topics"
                    onclick="tryItOut('POSTapi-v1-forum-topics');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-forum-topics"
                    onclick="cancelTryOut('POSTapi-v1-forum-topics');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-forum-topics"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/forum-topics</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-forum-topics"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-forum-topics"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="category_id"                data-endpoint="POSTapi-v1-forum-topics"
               value="17"
               data-component="body">
    <br>
<p>ID da categoria Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-v1-forum-topics"
               value="consequatur"
               data-component="body">
    <br>
<p>Título do tópico Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="content"                data-endpoint="POSTapi-v1-forum-topics"
               value="consequatur"
               data-component="body">
    <br>
<p>Conteúdo Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>author_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="author_id"                data-endpoint="POSTapi-v1-forum-topics"
               value="17"
               data-component="body">
    <br>
<p>ID do autor Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-v1-forum-topics"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (open/closed/pinned) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>views_count</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="views_count"                data-endpoint="POSTapi-v1-forum-topics"
               value="17"
               data-component="body">
    <br>
<p>Contagem de visualizações Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>replies_count</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="replies_count"                data-endpoint="POSTapi-v1-forum-topics"
               value="17"
               data-component="body">
    <br>
<p>Contagem de respostas Example: <code>17</code></p>
        </div>
        </form>

                    <h2 id="topicos-de-forum-GETapi-v1-forum-topics--id-">GET api/v1/forum-topics/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-forum-topics--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/forum-topics/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/forum-topics/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-forum-topics--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: http://localhost:3000
access-control-allow-credentials: true
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-forum-topics--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-forum-topics--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-forum-topics--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-forum-topics--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-forum-topics--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-forum-topics--id-" data-method="GET"
      data-path="api/v1/forum-topics/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-forum-topics--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-forum-topics--id-"
                    onclick="tryItOut('GETapi-v1-forum-topics--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-forum-topics--id-"
                    onclick="cancelTryOut('GETapi-v1-forum-topics--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-forum-topics--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/forum-topics/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-forum-topics--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-forum-topics--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-v1-forum-topics--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the forum topic. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="topicos-de-forum-PUTapi-v1-forum-topics--id-">PUT api/v1/forum-topics/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-forum-topics--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/forum-topics/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"category_id\": 17,
    \"title\": \"consequatur\",
    \"content\": \"consequatur\",
    \"author_id\": 17,
    \"status\": \"consequatur\",
    \"views_count\": 17,
    \"replies_count\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/forum-topics/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_id": 17,
    "title": "consequatur",
    "content": "consequatur",
    "author_id": 17,
    "status": "consequatur",
    "views_count": 17,
    "replies_count": 17
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-forum-topics--id-">
</span>
<span id="execution-results-PUTapi-v1-forum-topics--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-forum-topics--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-forum-topics--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-forum-topics--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-forum-topics--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-forum-topics--id-" data-method="PUT"
      data-path="api/v1/forum-topics/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-forum-topics--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-forum-topics--id-"
                    onclick="tryItOut('PUTapi-v1-forum-topics--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-forum-topics--id-"
                    onclick="cancelTryOut('PUTapi-v1-forum-topics--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-forum-topics--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/forum-topics/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/forum-topics/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-forum-topics--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-forum-topics--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-v1-forum-topics--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the forum topic. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="category_id"                data-endpoint="PUTapi-v1-forum-topics--id-"
               value="17"
               data-component="body">
    <br>
<p>ID da categoria Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-v1-forum-topics--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Título do tópico Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="content"                data-endpoint="PUTapi-v1-forum-topics--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Conteúdo Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>author_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="author_id"                data-endpoint="PUTapi-v1-forum-topics--id-"
               value="17"
               data-component="body">
    <br>
<p>ID do autor Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-v1-forum-topics--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Status (open/closed/pinned) Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>views_count</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="views_count"                data-endpoint="PUTapi-v1-forum-topics--id-"
               value="17"
               data-component="body">
    <br>
<p>Contagem de visualizações Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>replies_count</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="replies_count"                data-endpoint="PUTapi-v1-forum-topics--id-"
               value="17"
               data-component="body">
    <br>
<p>Contagem de respostas Example: <code>17</code></p>
        </div>
        </form>

                    <h2 id="topicos-de-forum-DELETEapi-v1-forum-topics--id-">DELETE api/v1/forum-topics/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-forum-topics--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/forum-topics/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/forum-topics/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-forum-topics--id-">
</span>
<span id="execution-results-DELETEapi-v1-forum-topics--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-forum-topics--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-forum-topics--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-forum-topics--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-forum-topics--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-forum-topics--id-" data-method="DELETE"
      data-path="api/v1/forum-topics/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-forum-topics--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-forum-topics--id-"
                    onclick="tryItOut('DELETEapi-v1-forum-topics--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-forum-topics--id-"
                    onclick="cancelTryOut('DELETEapi-v1-forum-topics--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-forum-topics--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/forum-topics/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-forum-topics--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-forum-topics--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-v1-forum-topics--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the forum topic. Example: <code>consequatur</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
