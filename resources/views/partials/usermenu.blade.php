{{-- Forum Link Available for all types of users within the system --}}
<li class="sidebar-item">
    <a href="/forums" class="sidebar-link">
        <span class="material-icons">
            chat
            </span>
    <span class="hide-menu">Forum Chat</span>
    </a>
</li>
{{-- All fonts used in the sidebar are from google font --}}
@can('user_management_access')
<li class="sidebar-item">
<a
class="sidebar-link has-arrow waves-effect waves-dark"
href="javascript:void(0)"
aria-expanded="false"
><span class="material-icons">
    supervisor_account
    </span><span class="hide-menu">{{ trans('cruds.userManagement.title') }}</span></a
>
<ul aria-expanded="false" class="collapse first-level">
    @can('permission_access')
        <li class="sidebar-item">
            <a href="{{ route("frontend.permissions.index") }}" class="sidebar-link">
                <span class="material-icons">
                    work_outline
                    </span>
            <span class="hide-menu">{{ trans('cruds.permission.title') }}</span>
            </a>
        </li>
    @endcan
    @can('role_access')
        <li class="sidebar-item">
            <a href="{{ route("frontend.roles.index") }}" class="sidebar-link">
                <span class="material-icons">
                    how_to_reg
                    </span>
            <span class="hide-menu"> {{ trans('cruds.role.title') }}</span>
            </a>
        </li>
    @endcan
    @can('user_access')
        <li class="sidebar-item">
            <a href="{{ route("frontend.users.index") }}" class="sidebar-link">
                <span class="material-icons">
                    accessibility
                    </span>
            <span class="hide-menu"> {{ trans('cruds.user.title') }}</span>
            </a>
        </li>
    @endcan
    @can('audit_log_access')
        <li class="sidebar-item">
            <a href="{{ route("admin.audit-logs.index") }}" class="sidebar-link">
                <span class="material-icons">
                    security
                    </span>
            <span class="hide-menu">{{ trans('cruds.auditLog.title') }}</span>
            </a>
        </li>
    @endcan
</ul>
</li>
@endcan
@can('basic_c_r_m_access')
<li class="sidebar-item">
<a
class="sidebar-link has-arrow waves-effect waves-dark"
href="javascript:void(0)"
aria-expanded="false"
><span class="material-icons">
    stars
    </span><span class="hide-menu">{{ trans('cruds.basicCRM.title') }}</span></a
>
<ul aria-expanded="false" class="collapse first-level">
    @can('crm_status_access')
        <li class="sidebar-item">
            <a href="{{ route("frontend.crm-statuses.index") }}" class="sidebar-link">
                <span class="material-icons">
                    description
                    </span>
            <span class="hide-menu">{{ trans('cruds.crmStatus.title') }}</span>
            </a>
        </li>
    @endcan
    @can('crm_customer_access')
        <li class="sidebar-item">
            <a href="{{ route("frontend.crm-customers.index") }}" class="sidebar-link">
                <span class="material-icons">
                    assignment_turned_in
                    </span>
            <span class="hide-menu">  {{ trans('cruds.crmCustomer.title') }}</span>
            </a>
        </li>
    @endcan
    @can('crm_note_access')
        <li class="sidebar-item">
            <a href="{{ route("frontend.crm-notes.index") }}" class="sidebar-link">
                <span class="material-icons">
                    library_books
                    </span>
            <span class="hide-menu"> {{ trans('cruds.crmNote.title') }}</span>
            </a>
        </li>
    @endcan
    @can('crm_document_access')
        <li class="sidebar-item">
            <a href="{{ route("frontend.crm-documents.index") }}" class="sidebar-link">
                <span class="material-icons">
                    sticky_note_2
                    </span>
            <span class="hide-menu">{{ trans('cruds.crmDocument.title') }}</span>
            </a>
        </li>
    @endcan
</ul>
</li>
@endcan
@can('user_alert_access')
<li class="sidebar-item">
<a href="{{ route("frontend.user-alerts.index") }}" class="sidebar-link"
><span class="material-icons">
    notifications
    </span><span class="hide-menu"> {{ trans('cruds.userAlert.title') }}</span></a
>
</li>
@endcan
@can('school_management_access')
<li class="sidebar-item">
<a
class="sidebar-link has-arrow waves-effect waves-dark"
href="javascript:void(0)"
aria-expanded="false"
><span class="material-icons">
    school
    </span><span class="hide-menu">{{ trans('cruds.schoolManagement.title') }}</span></a
>
<ul aria-expanded="false" class="collapse first-level">
    @can('school_access')
        <li class="sidebar-item">
            <a href="{{ route("frontend.schools.index") }}" class="sidebar-link">
                <span class="material-icons">
                    location_city
                    </span>
            <span class="hide-menu"> {{ trans('cruds.school.title') }}</span>
            </a>
        </li>
    @endcan
</ul>
</li>
@endcan
@can('course_access')
<li class="sidebar-item">
<a href="{{ route("frontend.courses.index") }}" class="sidebar-link"
><span class="material-icons">
    auto_stories
    </span><span class="hide-menu"> {{ trans('cruds.course.title') }}</span></a
>
</li>
@endcan
@can('lesson_access')
<li class="sidebar-item">
<a href="{{ route("frontend.lessons.index") }}" class="sidebar-link"
><span class="material-icons">
    computer
    </span><span class="hide-menu"> {{ trans('cruds.lesson.title') }}</span></a
>
</li>
@endcan
@can('test_access')
<li class="sidebar-item">
<a href="{{ route("frontend.tests.index") }}" class="sidebar-link"
><span class="material-icons">
    view_stream
    </span><span class="hide-menu"> {{ trans('cruds.test.title') }}</span></a
>
</li>
@endcan
@can('question_access')
<li class="sidebar-item">
<a href="{{ route("frontend.questions.index") }}" class="sidebar-link"
><span class="material-icons">
    quiz
    </span>
    <span class="hide-menu"> {{ trans('cruds.question.title') }}</span></a
>
</li>
@endcan
@can('question_option_access')
<li class="sidebar-item">
<a href="{{ route("frontend.question-options.index") }}" class="sidebar-link"
><span class="material-icons">
    help
    </span><span class="hide-menu"> {{ trans('cruds.questionOption.title') }}</span></a
>
</li>
@endcan
@can('test_result_access')
<li class="sidebar-item">
<a href="{{ route("frontend.test-results.index") }}" class="sidebar-link"
><span class="material-icons">
    help_outline
    </span><span class="hide-menu"> {{ trans('cruds.testResult.title') }}</span></a
>
</li>
@endcan
@can('test_answer_access')
<li class="sidebar-item">
<a href="{{ route("frontend.test-answers.index") }}" class="sidebar-link"
><span class="material-icons">
    question_answer
    </span><span class="hide-menu"> {{ trans('cruds.testAnswer.title') }}</span></a
>
</li>
@endcan
@can('content_management_access')
<li class="sidebar-item">
<a
class="sidebar-link has-arrow waves-effect waves-dark"
href="javascript:void(0)"
aria-expanded="false"
><span class="material-icons">
    add_moderator
    </span><span class="hide-menu">{{ trans('cruds.contentManagement.title') }}</span></a
>
<ul aria-expanded="false" class="collapse first-level">
    @can('content_category_access')
        <li class="sidebar-item">
            <a href="{{ route("frontend.content-categories.index") }}" class="sidebar-link">
                <span class="material-icons">
                    poll
                    </span>
            <span class="hide-menu">{{ trans('cruds.contentCategory.title') }}</span>
            </a>
        </li>
    @endcan
    @can('content_tag_access')
        <li class="sidebar-item">
            <a href="{{ route("frontend.content-tags.index") }}" class="sidebar-link">
                <span class="material-icons">
                    view_column
                    </span>
            <span class="hide-menu"> {{ trans('cruds.contentTag.title') }}</span>
            </a>
        </li>
    @endcan
    @can('content_page_access')
        <li class="sidebar-item">
            <a href="{{ route("frontend.content-pages.index") }}" class="sidebar-link">
                <span class="material-icons">
                    view_agenda
                    </span>
            <span class="hide-menu"> {{ trans('cruds.contentPage.title') }}</span>
            </a>
        </li>
    @endcan
</ul>
</li>
@endcan
@can('task_management_access')
<li class="sidebar-item">
<a
class="sidebar-link has-arrow waves-effect waves-dark"
href="javascript:void(0)"
aria-expanded="false"
><span class="material-icons">
    toc
    </span><span class="hide-menu">{{ trans('cruds.taskManagement.title') }}</span></a
>
<ul aria-expanded="false" class="collapse first-level">
    @can('task_status_access')
        <li class="sidebar-item">
            <a href="{{ route("frontend.content-categories.index") }}" class="sidebar-link">
                <span class="material-icons">
                    trending_down
                    </span>
            <span class="hide-menu">{{ trans('cruds.taskStatus.title') }}</span>
            </a>
        </li>
    @endcan
    @can('task_tag_access')
        <li class="sidebar-item">
            <a href="{{ route("frontend.task-tags.index") }}" class="sidebar-link">
                <span class="material-icons">
                    bookmarks
                    </span>
            <span class="hide-menu"> {{ trans('cruds.taskTag.title') }}</span>
            </a>
        </li>
    @endcan
    @can('task_access')
        <li class="sidebar-item">
            <a href="{{ route("frontend.tasks.index") }}" class="sidebar-link">
                <span class="material-icons">
                    settings_applications
                    </span>
            <span class="hide-menu"> {{ trans('cruds.task.title') }}</span>
            </a>
        </li>
    @endcan
    @can('tasks_calendar_access')
        <li class="sidebar-item">
            <a href="{{ route("frontend.tasks-calendars.index") }}" class="sidebar-link">
                <span class="material-icons">
                    edit_calendar
                    </span>
            <span class="hide-menu"> {{ trans('cruds.tasksCalendar.title') }}</span>
            </a>
        </li>
    @endcan
</ul>
</li>
@endcan
@can('faq_management_access')
<li class="sidebar-item">
<a
class="sidebar-link has-arrow waves-effect waves-dark"
href="javascript:void(0)"
aria-expanded="false"
><span class="material-icons">
    help
    </span><span class="hide-menu">{{ trans('cruds.faqManagement.title') }}</span></a
>
<ul aria-expanded="false" class="collapse first-level">
    @can('faq_category_access')
        <li class="sidebar-item">
            <a href="{{ route("frontend.faq-categories.index") }}" class="sidebar-link">
                <span class="material-icons">
                    help_outline
                    </span>
            <span class="hide-menu">{{ trans('cruds.faqCategory.title') }}</span>
            </a>
        </li>
    @endcan
    @can('faq_question_access')
        <li class="sidebar-item">
            <a href="{{ route("frontend.faq-questions.index") }}" class="sidebar-link">
                <span class="material-icons">
                    info
                    </span>
            <span class="hide-menu"> {{ trans('cruds.faqQuestion.title') }}</span>
            </a>
        </li>
    @endcan
</ul>
</li>
@endcan
@php($unread = \App\Models\QaTopic::unreadCount())
