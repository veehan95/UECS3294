# Introduction
A simple system to record:
- Students' information
- Classes' information
- Teachers' information
for tuition center.
This is an assignment form UECS3294 Advance Web Application in UTAR for January 2018.
This project should not be used for any commercial purpose

# Structure
## Classes Table
<table>
  <thead>
    <td>id(PK)</td>
    <td>class_id</td>
    <td>subject</td>
    <td>time</td>
    <td>day</td>
    <td>effective_date</td>
    <td>close_date</td>
    <td>max_sit</td>
    <td>venue</td>
    <td>teacher_id(FK)</td>
  </thead>
</table>
## Teachers Table
<table>
  <thead>
    <td>id(PK)</td>
    <td>teacher_id</td>
    <td>name</td>
    <td>age</td>
    <td>ic</td>
    <td>address</td>
    <td>contact</td>
    <td>email</td>
    <td>education_background</td>
  </thead>
</table> 
## Students Table
<table>
  <thead>
    <td>id(PK)</td>
    <td>student_id</td>
    <td>name</td>
    <td>age</td>
    <td>ic</td>
    <td>address</td>
    <td>contact</td>
    <td>parents_contact</td>
    <td>email</td>
    <td>school</td>
  </thead>
</table>

# Framework
<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.
