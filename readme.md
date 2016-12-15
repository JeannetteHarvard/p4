# Project 4 for DWA15
## Final Laravel Project: Alliances Management System

## Live URL
<http://p4.jeannette.nyc/>

## Description
Corporate Strategic Alliances today is surprisingly one of the few enterprise process areas which are not supported by any specialized IT systems. The job of any alliances executive requires daily interactions with multiple stakeholders inside and outside of his or her group and his or her company, on a global scale.

Keeping in mind all the contacts, names, titles and responsibilities, actions discussed and steps in driving joint initiatives is close to impossible. In this respect the job of alliances leaders is similar to the job of sales people, and in our opinion involves not less but probably even more contacts, types of activities and diversified areas of engagements. Nevertheless, the needs of salespeople have been satisfied since long with the CRMs such as Siebel, Salesforce and others, while there are no such systems for the specific requirements of the Alliances Management.

The objective of this project is to conduct a POC (Proof of Concept) for such a system which would address the needs of the strategic corporate alliances teams. As corporate alliances and engagements are really specific to any particular business and industry, we only target our system for technology industry, in particular for the partnership type between Software and Service providers (i.e. Oracle and Accenture, SAP and IBM, AWS and Capgemini).

## Screencast Demo
Quick demonstration of the project and implementation:
TBD<http://screencast-o-matic.com/watch/cDXerIjs5c>

## Details for Teaching Team
Alliances Management System POC core functionality:
- Authentication
  - Welcome Page: We decided to display on the welcome page all the three major features of the system even for unauthenticated users. The authentication is asked when any of those internal areas are accessed.
  - Login / Register functionality fully implemented.
  - All the features of the website (except for the home page) are only available for logged in users
- Partners
  - View all Partners owned by the logged in User
  - View Partner specific information by clicking on Partner logo
    - Follow up on the assigned Technology Areas to view other Partners in this space
    - Edit | Delete Partner
  - Add a New Partner (tagging the available Technology Areas)
- Technology Areas
  - View all Technology Areas and the managed Partners in each space
  - View Technology specific information by clicking on it
    - Follow up on the assigned Partners to see their information and other technology areas
    - Edit | Delete Technology Area (and all its assignments to the related partners)
  - Add a New Technology Area (bottom of the screen), attach to any of the managed partners
- Internal Teams
  - List of the major stakeholders driving the strategic partner relationships
    - Displays Strategic Business Unit (SBU), Photo, Name, Role, and Contact information
    - In the next version this section will provide sorting and filtering capabilities by SBUs, Initiatives and Partners as well as CRUD functionality.

The project uses standard Laravel Framework coding procedures with the implementation one Laravel package and one PHP package.

## P4 Specific Details for Teaching Team
4 CRUD operations in action (all with server side validation):
- Partners
  - Create: <http://p4.jeannette.nyc/partners/create>
  - Read: <http://p4.jeannette.nyc/partners/3>
  - Update: <http://p4.jeannette.nyc/partners/3/edit>
  - Delete (right bottom corner): <http://p4.jeannette.nyc/partners/3>
- Technology Areas
  - Create: <http://p4.jeannette.nyc/technologies/create>
  - Read: <http://p4.jeannette.nyc/technologies/1>
  - Update: <http://p4.jeannette.nyc/technologies/1/edit>
  - Delete (right bottom corner): <http://p4.jeannette.nyc/technologies/1>

Planning Doc:
<https://docs.google.com/document/d/1CF72jjYzqp9U7UCMy1EIvtWWGLM_taYMG1bSKjZSuiA/edit?usp=sharing>

## Test Data
The project populates test data through the following Seeders:
- Users: the target audience of the application is Alliances Managers and Leaders
- Partners: Strategic technology partners with whom the relationship has to be managed
- Technology Areas: Used to classify and easily identify and locate Partner
- Contacts: Internal Stakeholders involved in the strategic partner initiatives. Test user data generated via Faker package
- Partners and Technology Areas: Allocation of each partner to a certain technology area
- Partners and Users: Alliances managers are only allowed to view partners owned by them through this relationship

## Outside Code & Sources
- Laravel Framework version 5.3.26
<http://laravel.com/>
- Laravel Debugbar package 'barryvdh/laravel-debugbar'
<https://github.com/barryvdh/laravel-debugbar>
- Random User package 'fzaninotto/Faker'
<https://github.com/fzaninotto/Faker>
- Bootstrap CSS:
<https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css>
<https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css>
<https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js>
- The background image is borrowed from the following page:
<http://www.cci-us.com/strategic-alliances/>
