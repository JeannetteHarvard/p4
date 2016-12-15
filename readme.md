# Project 4 for DWA15
## Final Laravel Project: Alliances Management System

## Live URL
<http://p4.jeannette.nyc/>

## Description
Corporate Strategic Alliances today is surprisingly one of the few enterprise process areas which are not supported by any specialized IT systems. The job of any alliances executive requires daily interactions with multiple stakeholders inside and outside of his or her group and his or her company, on a global scale.

Keeping in mind all the contacts, names, titles and responsibilities, actions discussed and steps in driving joint initiatives is close to impossible. In this respect the job of alliances is close to the job of sales people, but in our opinion involves even more contacts, types of activities and diversified areas of engagements. Nevertheless, the needs of salespeople have been satisfied since long with the CRMs such as Siebel, Salesforce and others, while there are no such systems for the specific requirements of Alliances Management.

The objective of this project is to conduct a POC (Proof of Concept) for such a system which would address the needs of the corporate alliances teams. As corporate alliances and engagements are really specific to any particular business and industry, we only target our system for technology industry, in particular for the partnership type between Software and Service providers (i.e. Oracle and Accenture, SAP and IBM, AWS and Capgemini).

## Screencast Demo
Quick demonstration of the project and implementation:
TBD<http://screencast-o-matic.com/watch/cDXerIjs5c>

## Details for Teaching Team
Alliances Management system POC core functionality:
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
