<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

/*********************************************************************************
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/



$app_list_strings = array(
//e.g. auf Deutsch 'Contacts'=>'Contakten',
    'language_pack_name' => 'BH/HR Jezik',
    'moduleList' => array(
            'Home' => 'Početno',
			'ResourceCalendar' => 'Resource Calendar',
            'Contacts' => 'Kontakti',
            'Accounts' => 'Klijenti',
            'Alerts' => 'Obavijesti',
            'Opportunities' => 'Prilike',
            'Cases' => 'Slučajevi',
            'Notes' => 'Zabilješke',
            'Calls' => 'Pozivi',
            'TemplateSectionLine' => 'Template Section Line',
            'Calls_Reschedule' => 'Ponovno zakazivanje poziva',
            'Emails' => 'E-Mailovi',
            'EAPM' => 'EAPM',
            'Meetings' => 'Sastanci',
            'Tasks' => 'Zadaci',
            'Calendar' => 'Kalendar',
            'Leads' => 'Potencijalni klijenti',
            'Currencies' => 'Valute',
            'Activities' => 'Aktivnosti',
            'Bugs' => 'Bugovi',
            'Feeds' => 'RSS',
            'iFrames' => 'Moje stranice',
            'TimePeriods' => 'Vremenski periodi',
            'TaxRates' => 'Porezne stope',
            'ContractTypes' => 'Tipovi ugovora',
            'Schedulers' => 'Rasporedi',
            'Project' => 'Projekti',
            'ProjectTask' => 'Projektni zadaci',
            'Campaigns' => 'Kampanje',
            'CampaignLog' => 'Dnevnik kampanje',
            'Documents' => 'Dokumenti',
            'DocumentRevisions' => 'Revizije dokumenata',
            'Connectors' => 'Konektori',
            'Roles' => 'Uloge',
            'Notifications' => 'Notifikacije',
            'Sync' => 'Sinhronizacija',
            'Users' => 'Korisnik',
            'Employees' => 'Zaposlenici',
            'Administration' => 'Administracija',
            'ACLRoles' => 'Uloge',
            'InboundEmail' => 'Dolazna e-pošta',
            'Releases' => 'Distribucije',
            'Prospects' => 'Ciljevi',
            'Queues' => 'Redovi',
            'EmailMarketing' => 'Email marketing',
            'EmailTemplates' => 'Predlošci e-pošte',
            'SNIP' => 'Arhiviranje e-pošte',
            'ProspectLists' => 'Targets - Lists',
            'SavedSearch' => 'Spremljena pretraživanja',
            'UpgradeWizard' => 'Čarobnjak za nadogradnju',
            'Trackers' => 'Trackeri',
            'TrackerPerfs' => 'Preformanse trackera',
            'TrackerSessions' => 'Sesije trackera',
            'TrackerQueries' => 'Upiti trackera',
            'FAQ' => 'Često postavljena pitanja',
            'Newsletters' => 'Newsletteri',
            'SugarFeed' => 'SuiteCRM Feed',
            'SugarFavorites' => 'SuiteCRM Favorites',

            'OAuthKeys' => 'OAuth potrošački ključevi',
            'OAuthTokens' => 'OAuth tokeni',
            'Calls_Reschedule' => 'Calls Reschedule',
        ),

    'moduleListSingular' => array(
            'Home' => 'Početno',
            'Dashboard' => 'Nadzorna ploča',
            'Contacts' => 'Kontakt',
            'Accounts' => 'Klijent',
            'Opportunities' => 'Prodajna prilika',
            'Cases' => 'Slučaj',
            'Notes' => 'Bilješka',
            'Calls' => 'Poziv',
            'Emails' => 'E-mail',
            'EmailTemplates' => 'Predlošci e-pošte',
            'Meetings' => 'Sastanak',
            'Tasks' => 'Zadatak',
            'Calendar' => 'Kalendar',
            'Leads' => 'Potencijalni klijent',
            'Activities' => 'Aktivnost',
            'Bugs' => 'Bug',
            'KBDocuments' => 'Dokument Baze znanja',
            'Feeds' => 'RSS',
            'iFrames' => 'Moje stranice',
            'TimePeriods' => 'Vremenski period',
            'Project' => 'Projekt',
            'ProjectTask' => 'Projektni zadatak',
            'Prospects' => 'Cilj',
            'Campaigns' => 'Kampanja',
            'Documents' => 'Dokument',
            'SugarFollowing' => 'SuiteCRM Following',
            'Sync' => 'Sinhronizacija',
            'Users' => 'korisnik',
            'SugarFavorites' => 'SuiteCRM Favorites',

        ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Yes',
        '2' => 'Ne',
    ),

    //e.g. en francais 'Analyst'=>'Analyste',
    'account_type_dom' => array(
            '' => '',
            'Analyst' => 'Analitičar',
            'Competitor' => 'Konkurent',
            'Customer' => 'Kupac',
            'Integrator' => 'Integrator',
            'Investor' => 'Investitor',
            'Partner' => 'Partner',
            'Press' => 'Tisak',
            'Prospect' => 'Perspektiva',
            'Reseller' => 'Prodavač',
            'Other' => 'Ostalo',
        ),
    //e.g. en espanol 'Apparel'=>'Ropa',
    'industry_dom' => array(
            '' => '',
            'Apparel' => 'Odjeća',
            'Banking' => 'Bankarstvo',
            'Biotechnology' => 'Biotehnologija',
            'Chemicals' => 'Kemijska industrija',
            'Communications' => 'Komunikacije',
            'Construction' => 'Gradnja',
            'Consulting' => 'Konzalting',
            'Education' => 'Edukacija',
            'Electronics' => 'Elektronika',
            'Energy' => 'Energija',
            'Engineering' => 'Inženjering',
            'Entertainment' => 'Zabava',
            'Environmental' => 'Okoliš',
            'Finance' => 'Financije',
            'Government' => 'Vlada',
            'Healthcare' => 'Zdravstvo',
            'Hospitality' => 'Ugostiteljstvo',
            'Insurance' => 'Osiguranje',
            'Machinery' => 'Strojarstvo',
            'Manufacturing' => 'Proizvodnja',
            'Media' => 'Mediji',
            'Not For Profit' => 'Neprofitno',
            'Recreation' => 'Rekreacija',
            'Retail' => 'Maloprodaja',
            'Shipping' => 'Dostava',
            'Technology' => 'Tehnologija',
            'Telecommunications' => 'Telekomunikacije',
            'Transportation' => 'Prijevoz',
            'Utilities' => 'Komunalne usluge',
            'Other' => 'Ostalo',
        ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
            '' => '',
            'Cold Call' => 'Prvi poziv',
            'Existing Customer' => 'Postojeći kupac',
            'Self Generated' => 'Samogenerirano',
            'Employee' => 'Zaposlenik',
            'Partner' => 'Partner',
            'Public Relations' => 'Odnosi s javnošću',
            'Direct Mail' => 'Direktna e-pošta',
            'Conference' => 'Konferencija',
            'Trade Show' => 'Sajam',
            'Web Site' => 'Web stranica',
            'Word of mouth' => 'Preporuka',
            'Email' => 'E-pošta',
            'Campaign' => 'Kampanja',
            'Other' => 'Ostalo',
        ),
    'opportunity_type_dom' => array(
            '' => '',
            'Existing Business' => 'Postojeće poslovanje',
            'New Business' => 'Novo poslovanje',
        ),
    'roi_type_dom' => array(
            'Revenue' => 'Prihod',
            'Investment' => 'Investicija',
            'Expected_Revenue' => 'Očekivani prihod',
            'Budget' => 'Budžet',

        ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
            '' => '',
            'Primary Decision Maker' => 'Primarni donositelj odluke',
            'Business Decision Maker' => 'Poslovni donositelj odluke',
            'Business Evaluator' => 'Poslovni procijenitelj',
            'Technical Decision Maker' => 'Tehnički donositelj odluke',
            'Technical Evaluator' => 'Tehnički procijenitelj',
            'Executive Sponsor' => 'Izvršni sponzor',
            'Influencer' => 'Utjecatelj',
            'Other' => 'Ostalo',
        ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
            '' => '',
            'Primary Contact' => 'Primarni kontakt',
            'Alternate Contact' => 'Alternativni kontakt',
        ),
    'payment_terms' => array(
            '' => '',
            'Net 15' => 'Neto 15 dana',
            'Net 30' => 'Neto 30 dana',
        ),
    'fts_type' => array(
        '' => '',
        'Elastic' => 'elasticsearch',
    ),
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
            'Prospecting' => 'Ispitivanje potencijalnog kupca',
            'Qualification' => 'Kvalifikacija',
            'Needs Analysis' => 'Treba analizu',
            'Value Proposition' => 'Prijedlog vrijednosti',
            'Id. Decision Makers' => 'Identificiranje donositelja odluka',
            'Perception Analysis' => 'Analiza opažanja',
            'Proposal/Price Quote' => 'Prijedlog/ponuda cijene',
            'Negotiation/Review' => 'Pregovor/Recenzija',
            'Closed Won' => 'Zaključeno dobiveno',
            'Closed Lost' => 'Zaključeno izgubljeno',
        ),
    'in_total_group_stages' => array(
        'Draft' => 'Skica',
        'Negotiation' => 'Pregovor',
        'Delivered' => 'Dostavljeno',
        'On Hold' => 'Na čekanju',
        'Confirmed' => 'Potvrđeno',
        'Closed Accepted' => 'Dobiveno',
        'Closed Lost' => 'Zaključeno izgubljeno',
        'Closed Dead' => 'Nerealizirano',
    ),
    'sales_probability_dom' => // keys must be the same as sales_stage_dom
        array(
            'Prospecting' => '10',
            'Qualification' => '20',
            'Needs Analysis' => '25',
            'Value Proposition' => '30',
            'Id. Decision Makers' => '40',
            'Perception Analysis' => '50',
            'Proposal/Price Quote' => '65',
            'Negotiation/Review' => '80',
            'Closed Won' => '100',
            'Closed Lost' => '0',
        ),
    'activity_dom' => array(
            'Call' => 'Poziv',
            'Meeting' => 'Sastanak',
            'Task' => 'Zadatak',
            'Email' => 'e-pošta',
            'Note' => 'Bilješka',
        ),
    'salutation_dom' => array(
            '' => '',
            'Mr.' => 'G.',
            'Ms.' => 'Gđa.',
            'Mrs.' => 'Gđica.',
            'Dr.' => 'Dr.',
            'Prof.' => 'Prof.',
        ),
    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(60 => '1 minutu prije',
        300 => '5 minuta prije',
        600 => '10 minuta prije',
        900 => '15 minuta prije',
        1800 => '30 minuta prije',
        3600 => '1 sat prije',
        7200 => '2 sata prije',
        10800 => '3 sata prije',
        18000 => '5 sati prije',
        86400 => '1 dan prije',
    ),

    'task_priority_default' => 'Srednji',
    'task_priority_dom' => array(
            'High' => 'Visoki',
            'Medium' => 'Srednji',
            'Low' => 'Niski',
        ),
    'task_status_default' => 'Nije započet',
    'task_status_dom' => array(
            'Not Started' => 'Nije započet',
            'In Progress' => 'U tijeku',
            'Completed' => 'Dovršeno',
            'Pending Input' => 'Čeka na unos',
            'Deferred' => 'Odgođeno',
        ),
    'meeting_status_default' => 'Planned',
    'meeting_status_dom' => array(
            'Planned' => 'Planirano',
            'Held' => 'Održano',
            'Not Held' => 'Nije održano',
        ),
    'extapi_meeting_password' => array(
            'WebEx' => 'WebEx',
        ),
    'meeting_type_dom' => array(
            'Other' => 'Ostalo',
            'Sugar' => 'SuiteCRM',
        ),
    'call_status_default' => 'Planned',
    'call_status_dom' => array(
            'Planned' => 'Planirano',
            'Held' => 'Održano',
            'Not Held' => 'Nije održano',
        ),
    'call_direction_default' => 'Outbound',
    'call_direction_dom' => array(
            'Inbound' => 'Dolazni',
            'Outbound' => 'Odlazni',
        ),
    'lead_status_dom' => array(
            '' => '',
            'New' => 'Novi',
            'Assigned' => 'Dodijeljen',
            'In Process' => 'U procesu',
            'Converted' => 'Pretvoreni',
            'Recycled' => 'Recikliran',
            'Dead' => 'Diskvalificiran',
        ),
    'gender_list' => array(
            'male' => 'Muško',
            'female' => 'Žensko',
        ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
            'P1' => 'Visoki',
            'P2' => 'Srednji',
            'P3' => 'Niski',
        ),
    'user_type_dom' => array(
            'RegularUser' => 'Regularni korisnik',
            'Administrator' => 'Administrator',
        ),
    'user_status_dom' => array(
            'Active' => 'Aktivni računi e-pošte',
            'Inactive' => 'Neaktivan',
        ),
    'employee_status_dom' => array(
            'Active' => 'Aktivni računi e-pošte',
            'Terminated' => 'Poništen',
            'Leave of Absence' => 'Odsustvo',
        ),
    'messenger_type_dom' => array(
            '' => '',
            'MSN' => 'MSN',
            'Yahoo!' => 'Yahoo!',
            'AOL' => 'AOL',
        ),
    'project_task_priority_options' => array(
        'High' => 'Visoki',
        'Medium' => 'Srednji',
        'Low' => 'Niski',
    ),
    'project_task_priority_default' => 'Srednji',

    'project_task_status_options' => array(
        'Not Started' => 'Nije započet',
        'In Progress' => 'U tijeku',
        'Completed' => 'Dovršeno',
        'Pending Input' => 'Čeka na unos',
        'Deferred' => 'Odgođeno',
    ),
    'project_task_utilization_options' => array(
        '0' => 'nijedan',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Skica',
        'In Review' => 'U pregledu',
        'Underway' => 'U toku',
        'On_Hold' => 'Na čekanju',
        'Completed' => 'Dovršeno',
    ),
    'project_status_default' => 'Skica',

    'project_duration_units_dom' => array(
        'Days' => 'dana',
        'Hours' => 'sati',
    ),

    'activity_status_type_dom' => array(''=>'-Nijedan-',
        'active' => 'Aktivan',
        'inactive' => 'Neaktivan',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Računi',
    'record_type_display' => array(
            '' => '',
            'Accounts' => 'Klijent',
            'Opportunities' => 'Prodajna prilika',
            'Cases' => 'Slučaj',
            'Leads' => 'Potencijalni klijent',
            'Contacts' => 'Kontakt', // cn (11/22/2005) added to support Emails

            'Bugs' => 'Bug',
            'Project' => 'Projekt',

            'Prospects' => 'Cilj',
            'ProjectTask' => 'Projektni zadatak',

            'Tasks' => 'Zadatak',

        ),

    'record_type_display_notes' => array(
            'Accounts' => 'Klijent',
            'Contacts' => 'Kontakt',
            'Opportunities' => 'Prodajna prilika',
            'Tasks' => 'Zadatak',
            'Emails' => 'e-pošta',

            'Bugs' => 'Bug',
            'Project' => 'Projekt',
            'ProjectTask' => 'Projektni zadatak',
            'Prospects' => 'Cilj',
            'Cases' => 'Slučaj',
            'Leads' => 'Potencijalni klijent',

            'Meetings' => 'Sastanak',
            'Calls' => 'Poziv',
        ),

    'parent_type_display' => array(
            'Accounts' => 'Klijent',
            'Contacts' => 'Kontakt',
            'Tasks' => 'Zadatak',
            'Opportunities' => 'Prodajna prilika',

            'Bugs' => 'Bug',
            'Cases' => 'Slučaj',
            'Leads' => 'Potencijalni klijent',

            'Project' => 'Projekt',
            'ProjectTask' => 'Projektni zadatak',

            'Prospects' => 'Cilj',

        ),

    'issue_priority_default_key' => 'Srednji',
    'issue_priority_dom' => array(
            'Urgent' => 'Hitno',
            'High' => 'Visoki',
            'Medium' => 'Srednji',
            'Low' => 'Niski',
        ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
            '' => '',
            'Accepted' => 'Prihvaćeno',
            'Duplicate' => 'Duplikat',
            'Closed' => 'Zatvoren',
            'Out of Date' => 'Zastarjelo',
            'Invalid' => 'Pogrešno',
        ),

    'issue_status_default_key' => 'Novi',
    'issue_status_dom' => array(
            'New' => 'Novi',
            'Assigned' => 'Dodijeljen',
            'Closed' => 'Zatvoren',
            'Pending' => 'U toku',
            'Rejected' => 'Odbijen',
        ),

    'bug_priority_default_key' => 'Srednji',
    'bug_priority_dom' => array(
            'Urgent' => 'Hitno',
            'High' => 'Visoki',
            'Medium' => 'Srednji',
            'Low' => 'Niski',
        ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
            '' => '',
            'Accepted' => 'Prihvaćeno',
            'Duplicate' => 'Duplikat',
            'Fixed' => 'Ispravljeno',
            'Out of Date' => 'Zastarjelo',
            'Invalid' => 'Pogrešno',
            'Later' => 'Kasnije',
        ),
    'bug_status_default_key' => 'Novi',
    'bug_status_dom' => array(
            'New' => 'Novi',
            'Assigned' => 'Dodijeljen',
            'Closed' => 'Zatvoren',
            'Pending' => 'U toku',
            'Rejected' => 'Odbijen',
        ),
    'bug_type_default_key' => 'Bug',
    'bug_type_dom' => array(
            'Defect' => 'Defect',
            'Feature' => 'Svojstvo',
        ),
    'case_type_dom' => array(
            'Administration' => 'Administracija',
            'Product' => 'Proizvod',
            'User' => 'korisnik',
        ),

    'source_default_key' => '',
    'source_dom' => array(
            '' => '',
            'Internal' => 'Unutarnji',
            'Forum' => 'Forum',
            'Web' => 'Web',
            'InboundEmail' => 'Dolazna e-pošta',
        ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
            '' => '',
            'Accounts' => 'Klijenti',
            'Activities' => 'Aktivnosti',
            'Bugs' => 'Bugovi',
            'Calendar' => 'Kalendar',
            'Calls' => 'Pozivi',
            'Campaigns' => 'Kampanje',
            'Cases' => 'Slučajevi',
            'Contacts' => 'Kontakti',
            'Currencies' => 'Valute',
            'Dashboard' => 'Nadzorna ploča',
            'Documents' => 'Dokumenti',
            'Emails' => 'E-mailovi',
            'Feeds' => 'Kanali',
            'Forecasts' => 'Prognoze',
            'Help' => 'Pomoć',
            'Home' => 'Početno',
            'Leads' => 'Potencijalni klijenti',
            'Meetings' => 'Sastanci',
            'Notes' => 'Zabilješke',
            'Opportunities' => 'Prilike',
            'Outlook Plugin' => 'Outlook priključak',
            'Projects' => 'Projekti',
            'Quotes' => 'Ponude',
            'Releases' => 'Distribucije',
            'RSS' => 'RSS',
            'Studio' => 'Studio',
            'Upgrade' => 'Nadogradnja',
            'Users' => 'korisnik',
        ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
            '' => '',
            'Planning' => 'Planiranje',
            'Active' => 'aktivni računi e-pošte',
            'Inactive' => 'neaktivan',
            'Complete' => 'Dovršeno',
            //'In Queue' => 'In Queue',
            //'Sending' => 'Sending',
        ),
    'campaign_type_dom' => array(
            '' => '',
            'Telesales' => 'Teleprodaje',
            'Mail' => 'E-pošta',
            'Email' => 'e-pošta',
            'Print' => 'Ispis',
            'Web' => 'Web',
            'Radio' => 'Radio',
            'Television' => 'Televizija',
            'NewsLetter' => 'Newsletter',
        ),

    'newsletter_frequency_dom' => array(
            '' => '',
            'Weekly' => 'Sedmično',
            'Monthly' => 'Mjesečno',
            'Quarterly' => 'Kvartalno',
            'Annually' => 'Godišnje',
        ),

    'notifymail_sendtype' => array(
            'SMTP' => 'SMTP',
        ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Januar',
        '2' => 'Februar',
        '3' => 'Mart',
        '4' => 'April',
        '5' => 'Maj',
        '6' => 'Juni',
        '7' => 'Juli',
        '8' => 'August',
        '9' => 'Septembar',
        '10' => 'Oktobar',
        '11' => 'Novembar',
        '12' => 'Decembar',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Januar',
        '2' => 'Februar',
        '3' => 'Mart',
        '4' => 'April',
        '5' => 'Maj',
        '6' => 'Juni',
        '7' => 'Juli',
        '8' => 'August',
        '9' => 'Septembar',
        '10' => 'Oktobar',
        '11' => 'Novembar',
        '12' => 'Decembar',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Nedjelja',
        '2' => 'Ponedjeljak',
        '3' => 'Utorak',
        '4' => 'Srijeda',
        '5' => 'Četvrtak',
        '6' => 'Petak',
        '7' => 'Subota',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Ned',
        '2' => 'Pon',
        '3' => 'Uto',
        '4' => 'Sri',
        '5' => 'Čet',
        '6' => 'Pet',
        '7' => 'Sub',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'am',
        'pm' => 'pm',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'AM',
        'PM' => 'PM',
    ),

    'dom_report_types' => array(
        'tabular' => 'Redovi i stupci',
        'summary' => 'Zbir',
        'detailed_summary' => 'Zbir sa detaljima',
        'Matrix' => 'Matrica',
    ),

    'dom_email_types' => array(
        'out' => 'Poslano',
        'archived' => 'Arhivirano',
        'draft' => 'Skica',
        'inbound' => 'Dolazno',
        'campaign' => 'Kampanja',
    ),
    'dom_email_status' => array(
        'archived' => 'Arhivirano',
        'closed' => 'Zatvoren',
        'draft' => 'Skica',
        'read' => 'Pročitano',
        'replied' => 'Odgovoreno',
        'sent' => 'Poslano',
        'send_error' => 'Greška slanja',
        'unread' => 'Nepročitano',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Arhivirano',
    ),

    'dom_email_server_type' => array('' => '-Nijedan-',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '-Nijedan-',
        'createcase' => 'Kreiraj slučaj',
        'bounce' => 'Odskočno upravljanje',
    ),
    'dom_email_distribution' => array('' => '-Nijedan-',
        'direct' => 'Direktno dodijeljivanje',
        'roundRobin' => 'Razigravanje',
        'leastBusy' => 'Najmanje zauzeto',
    ),
    'dom_email_errors' => array(1 => 'Odaberite samo jednog korisnika kada direktno dodijelite stavke.',
        2 => 'Morate dodijeliti Samo Provjerene Stavke kada direktno dodijelite stavke.',
    ),
    'dom_email_bool' => array('bool_true' => 'Da',
        'bool_false' => 'Ne',
    ),
    'dom_int_bool' => array(1 => 'Da',
        0 => 'Ne',
    ),
    'dom_switch_bool' => array('on' => 'Da',
        'off' => 'Ne',
        '' => '-Nijedan-', ),

    'dom_email_link_type' => array('sugar' => 'SuiteCRM Email Client',
        'mailto' => 'Vanjski email klijent', ),

    'dom_email_editor_option' => array('' => '-Nijedan-',
        'html' => 'HTML Email',
        'plain' => 'Jednostavni tekst Email', ),

    'schedulers_times_dom' => array('not run' => 'Prošlo vrijeme izvođenja, nije izvršeno',
        'ready' => 'Spremno',
        'in progress' => 'U tijeku',
        'failed' => 'Neuspjelo',
        'completed' => 'Dovršeno',
        'no curl' => 'Nije pokrenuto: cURL nedostupan',
    ),

    'scheduler_status_dom' => array(
            'Active' => 'aktivni računi e-pošte',
            'Inactive' => 'neaktivan',
        ),

    'scheduler_period_dom' => array(
            'min' => 'minuta',
            'hour' => 'sati',
        ),
    'forecast_schedule_status_dom' => array(
            'Active' => 'aktivni računi e-pošte',
            'Inactive' => 'neaktivan',
        ),
    'forecast_type_dom' => array(
            'Direct' => 'Direktno',
            'Rollup' => 'Rollup',
        ),
    'document_category_dom' => array(
            '' => '',
            'Marketing' => 'Marketing',
            'Knowledege Base' => 'Baza znanja',
            'Sales' => 'Prodaje',
        ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Arhivirano',
        // TODO: add more categories here...
    ),
+

    'document_subcategory_dom' => array(
            '' => '',
            'Marketing Collateral' => 'Marketinški materijal',
            'Product Brochures' => 'Brošure proizvoda',
            'FAQ' => 'Često postavljena pitanja',
        ),

    'document_status_dom' => array(
            'Active' => 'aktivni računi e-pošte',
            'Draft' => 'Skica',
            'FAQ' => 'Često postavljena pitanja',
            'Expired' => 'Istekao',
            'Under Review' => 'Pod pregledom',
            'Pending' => 'U toku',
        ),
    'document_template_type_dom' => array(
            '' => '',
            'mailmerge' => 'Spajanje e-pošte',
            'eula' => 'EULA',
            'nda' => 'NDA',
            'license' => 'Ugovor o licenci',
        ),
    'dom_meeting_accept_options' => array(
            'accept' => 'Prihvati',
            'decline' => 'Odbaci',
            'tentative' => 'Privremeni',
        ),
    'dom_meeting_accept_status' => array(
            'accept' => 'Prihvaćeno',
            'decline' => 'Odbijeno',
            'tentative' => 'Privremeni',
            'none' => 'Nijedan',
        ),
    'duration_intervals' => array('0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => '-Nijedan-',
        'Daily' => 'Dnevno',
        'Weekly' => 'Sedmično',
        'Monthly' => 'Mjesečno',
        'Yearly' => 'Godišnje',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'dan(a)',
        'Weekly' => 'sedmica(a)',
        'Monthly' => 'mjesec(i)',
        'Yearly' => 'godina(e)',
    ),

    'duration_dom' => array(
        '' => '-Nijedan-',
        '900' => '15 minuta',
        '1800' => '30 minuta',
        '2700' => '45 minuta',
        '3600' => '1 sat',
        '5400' => '1.5 sati',
        '7200' => '2 sata',
        '10800' => '3 sata',
        '21600' => '6 sati',
        '86400' => '1 dan',
        '172800' => '2 dana',
        '259200' => '3 dana',
        '604800' => '1 sedmica',
    ),

// deferred
    /*// QUEUES MODULE DOMs
    'queue_type_dom' => array(
        'Users' => 'Users',
        'Mailbox' => 'Mailbox',
    ),
    */
//prospect list type dom
    'prospect_list_type_dom' => array(
            'default' => 'Zadano',
            'seed' => 'Seed',
            'exempt_domain' => 'Lista suzbijanja - prema domeni',
            'exempt_address' => 'Lista suzbijanja - prema adresi e-pošte',
            'exempt' => 'Lista suzbijanja - prema Id',
            'test' => 'Test',
        ),

    'email_settings_num_dom' => array(
            '10' => '10',
            '20' => '20',
            '50' => '50',
        ),
    'email_marketing_status_dom' => array(
            '' => '',
            'active' => 'Aktivan',
            'inactive' => 'Neaktivan',
        ),

    'campainglog_activity_type_dom' => array(
            '' => '',
            'targeted' => 'Poruka poslana/pokušalo poslati',
            'send error' => 'Vraćene poruke,Ostalo',
            'invalid email' => 'Vraćene poruke,Pogrešan Email',
            'link' => 'Klikni-kroz poveznica',
            'viewed' => 'Pregledana poruka',
            'removed' => 'Odjavljeno',
            'lead' => 'Kreirani potencijalni klijenti',
            'contact' => 'Kreirani kontakti',
            'blocked' => 'Suzbijeno prema adresi e-pošte ili domeni',
        ),

    'campainglog_target_type_dom' => array(
            'Contacts' => 'Kontakti',
            'Users' => 'korisnik',
            'Prospects' => 'Ciljevi',
            'Leads' => 'Potencijalni klijenti',
            'Accounts' => 'Klijenti',
        ),
    'merge_operators_dom' => array(
        'like' => 'Sadrži',
        'exact' => 'Točno',
        'start' => 'Počinje sa',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Da',
        'false' => 'Ne',
        'required' => 'Potrebno',
    ),

    'Elastic_boost_options' => array(
        '0' => 'Onemogućeno',
        '1' => 'Nizak porast',
        '2' => 'Srednji porast',
        '3' => 'Visoki porast',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Onemogućeno',
        1 => 'Omogućeno',
    ),

    'navigation_paradigms' => array(
        'm' => 'Moduli',
        'gm' => 'Grupirani moduli',
    ),

    'projects_priority_options' => array(
        'high' => 'Visoki',
        'medium' => 'Srednji',
        'low' => 'Niski',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Nije započet',
        'inprogress' => 'U tijeku',
        'completed' => 'Dovršeno',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Proširi legendu',
        'collapselegend' => 'Sažmi legendu',
        'clickfordrilldown' => 'Click for Drilldown',
        'drilldownoptions' => 'Drill Down Options',
        'detailview' => 'Više detalja...',
        'piechart' => 'Pita grafikon',
        'groupchart' => 'Grupni grafikon',
        'stackedchart' => 'Nagomilani grafikon',
        'barchart' => 'Stupčasti grafikon',
        'horizontalbarchart' => 'Horizontalni grafikon',
        'linechart' => 'Linijski grafikon',
        'noData' => 'Podatci nedostupni',
        'print' => 'Ispis',
        'pieWedgeName' => 'sekcije',
    ),
    'release_status_dom' => array(
            'Active' => 'aktivni računi e-pošte',
            'Inactive' => 'neaktivan',
        ),
    'email_settings_for_ssl' => array(
            '0' => '',
            '1' => 'SSL',
            '2' => 'TLS',
        ),
    'import_enclosure_options' => array(
            '\'' => 'Jednostruki navod (&#39;)',
            '"' => 'Dvostruki navod (&#34;)',
            '' => '-Nijedan-',
            'other' => 'Ostalo:',
        ),
    'import_delimeter_options' => array(
            ',' => ',',
            ';' => ';',
            '\t' => '\t',
            '.' => '.',
            ':' => ':',
            '|' => '|',
            'other' => 'Ostalo:',
        ),
    'link_target_dom' => array(
            '_blank' => 'Novi prozor',
            '_self' => 'Isti prozor',
        ),
    'dashlet_auto_refresh_options' => array(
            '-1' => 'Nemoj automatski osvježiti',
            '30' => 'Svakih 30 sekundi',
            '60' => 'Svaku 1 minutu',
            '180' => 'Svake 3 minute',
            '300' => 'Svakih 5 minuta',
            '600' => 'Svakih 10 minuta',
        ),
    'dashlet_auto_refresh_options_admin' => array(
            '-1' => 'Nikad',
            '30' => 'Svakih 30 sekundi',
            '60' => 'Svaku 1 minutu',
            '180' => 'Svake 3 minute',
            '300' => 'Svakih 5 minuta',
            '600' => 'Svakih 10 minuta',
        ),
    'date_range_search_dom' => array(
            '=' => 'Jednako',
            'not_equal' => 'Ne na',
            'greater_than' => 'Poslije',
            'less_than' => 'Prije',
            'last_7_days' => 'Zadnjih 7 dana',
            'next_7_days' => 'Sljedećih 7 dana',
            'last_30_days' => 'Zadnjih 30 dana',
            'next_30_days' => 'Sljedećih 30 dana',
            'last_month' => 'Prošli mjesec',
            'this_month' => 'Ovaj mejsec',
            'next_month' => 'Sljedeći mjesec',
            'last_year' => 'Prošle godine',
            'this_year' => 'Ove godine',
            'next_year' => 'Sljedeće godine',
            'between' => 'je između',
        ),
    'numeric_range_search_dom' => array(
            '=' => 'Jednako',
            'not_equal' => 'Nije jednako',
            'greater_than' => 'veće od',
            'greater_than_equals' => 'veće od ili jednako',
            'less_than' => 'manje od',
            'less_than_equals' => 'manje od ili jednako',
            'between' => 'je između',
        ),
    'lead_conv_activity_opt' => array(
            'copy' => 'Kopiraj',
            'move' => 'Premjesti',
            'donothing' => 'Ne uradi ništa',
        ),
);

$app_strings = array(
    'LBL_TEST_SETTINGS'     => 'Testiraj postavke', //PR3333
    'LBL_TOUR_NEXT' => 'Sljedeće',
    'LBL_TOUR_SKIP' => 'Preskoči',
    'LBL_TOUR_BACK' => 'Natrag',
    'LBL_TOUR_CLOSE' => 'Zatvori',
    'LBL_TOUR_TAKE_TOUR' => 'Započnite obilazak',
    'LBL_MY_AREA_LINKS' => 'Moje poveznice područja:' /*for 508 compliance fix*/,
    'LBL_GETTINGAIR' => 'Getting Air' /*for 508 compliance fix*/,
    'LBL_WELCOMEBAR' => 'Dobrodošli' /*for 508 compliance fix*/,
    'LBL_ADVANCEDSEARCH' => 'Napredna Pretraga' /*for 508 compliance fix*/,
    'LBL_MOREDETAIL' => 'Više detalja' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Uredi Inline' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Pregledaj' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Filtriraj' /*for 508 compliance fix*/,
    'LBL_PROJECT_MINUS' => 'Ukloni' /*for 508 compliance fix*/,
    'LBL_PROJECT_PLUS' => 'Dodaj' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ICON_COLUMN_1' => 'Stupac' /*for 508 compliance fix*/,
    'LBL_ICON_COLUMN_2' => '2 stupca' /*for 508 compliance fix*/,
    'LBL_ICON_COLUMN_3' => '3 stupca' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Dodaj' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Sakrij/Prikaži' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Izbriši' /*for 508 compliance fix*/,
    'LBL_PLUS_INLINE' => 'Dodaj' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Očisti' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Ukloni' /*for 508 compliance fix*/,
    'LBL_ADD' => 'Dodaj' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Logo kompanije' /*for 508 compliance fix*/,
    'LBL_JS_CALENDAR' => 'Kalendar' /*for 508 compliance fix*/,
    'LBL_ADVANCED' => 'Napredno',
    'LBL_BASIC' => 'Osnovno',  //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_MODULE_FILTER' => 'Filtriraj prema',
    'LBL_CONNECTORS_POPUPS' => 'Iskočni prozori priključnika',
    'LBL_CLOSEINLINE' => 'Zatvori',
    'LBL_EDITINLINE' => 'Uredi',
    'LBL_VIEWINLINE' => 'Pregledaj',
    'LBL_INFOINLINE' => 'Informacije',
    'LBL_POWERED_BY_SUGARCRM' => 'Powered by SugarCRM',
    'LBL_PRINT' => 'Ispis',
    'LBL_HELP' => 'Pomoć',
    'LBL_ID_FF_SELECT' => 'Odaberi',
    'DEFAULT' => 'Osnovno', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_SORT' => 'Sortiraj',
    'LBL_OUTBOUND_EMAIL_ADD_SERVER' => 'Dodaj server...',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Omogući SMTP iznad SSL ili TLS?',
    'LBL_NO_ACTION' => 'Ne postoji radnja pod tim imenom.',
    'LBL_NO_SHORTCUT_MENU' => 'There are no actions available.',
    'LBL_NO_DATA' => 'Nema podatka',
    'LBL_ROUTING_ADD_RULE' => 'Dodaj pravilo',
    'LBL_ROUTING_ALL' => 'Barem',
    'LBL_ROUTING_ANY' => 'Bilo koji',
    'LBL_ROUTING_BREAK' => '-',
    'LBL_ROUTING_BUTTON_CANCEL' => 'Odustani',
    'LBL_ROUTING_BUTTON_SAVE' => 'Spremi pravilo',

    'LBL_ROUTING_ACTIONS_COPY_MAIL' => 'Kopiraj e-poštu',
    'LBL_ROUTING_ACTIONS_DELETE_BEAN' => 'Delete SuiteCRM Object',
    'LBL_ROUTING_ACTIONS_DELETE_FILE' => 'Izbriši datoteku',
    'LBL_ROUTING_ACTIONS_DELETE_MAIL' => 'Izbriši e-poštu',
    'LBL_ROUTING_ACTIONS_FORWARD' => 'Proslijedi e-poštu',
    'LBL_ROUTING_ACTIONS_MARK_FLAGGED' => 'Označi e-poštu',
    'LBL_ROUTING_ACTIONS_MARK_READ' => 'Označi kao pročitano',
    'LBL_ROUTING_ACTIONS_MARK_UNREAD' => 'Označi kao nepročitano',
    'LBL_ROUTING_ACTIONS_MOVE_MAIL' => 'Premjesti e-poštu',
    'LBL_ROUTING_ACTIONS_PEFORM' => 'Izvrši sljedeće radnje',
    'LBL_ROUTING_ACTIONS_REPLY' => 'Odgovori na e-poštu',

    'LBL_ROUTING_CHECK_RULE' => 'Greška je detektirana:\n',
    'LBL_ROUTING_CHECK_RULE_DESC' => 'Molim provjerite sva polja koja su označena.',
    'LBL_ROUTING_CONFIRM_DELETE' => 'Jeste li sigurni želite li izbrisati ovo pravilo? Ovo se ne može poništiti.',

    'LBL_ROUTING_FLAGGED' => 'flag set',
    'LBL_ROUTING_FORM_DESC' => 'Spremljena pravila odmah su aktivna.',
    'LBL_ROUTING_FW' => 'FW:',
    'LBL_ROUTING_LIST_TITLE' => 'Pravila',
    'LBL_ROUTING_MATCH' => 'Ako',
    'LBL_ROUTING_MATCH_2' => 'od sljedećih uvjeta su zadovoljeni:',
    'LBL_NOTIFICATIONS' => 'Notifikacije',
    'LBL_ROUTING_MATCH_CC_ADDR' => 'CC',
    'LBL_ROUTING_MATCH_DESCRIPTION' => 'Sadržaj tijela',
    'LBL_ROUTING_MATCH_FROM_ADDR' => 'Od',
    'LBL_ROUTING_MATCH_NAME' => 'Subjekt',
    'LBL_ROUTING_MATCH_PRIORITY_HIGH' => 'Visoki prioritet',
    'LBL_ROUTING_MATCH_PRIORITY_NORMAL' => 'Normalni prioritet',
    'LBL_ROUTING_MATCH_PRIORITY_LOW' => 'Niski prioritet',
    'LBL_ROUTING_MATCH_TO_ADDR' => 'Prema',
    'LBL_ROUTING_MATCH_TYPE_MATCH' => 'Sadrži',
    'LBL_ROUTING_MATCH_TYPE_NOT_MATCH' => 'Ne sadrži',

    'LBL_ROUTING_NAME' => 'Ime pravila',
    'LBL_ROUTING_NEW_NAME' => 'Novo pravilo',
    'LBL_ROUTING_ONE_MOMENT' => 'Trenutak molim...',
    'LBL_ROUTING_ORIGINAL_MESSAGE_FOLLOWS' => 'Slijedi originalna poruka.',
    'LBL_ROUTING_RE' => 'RE:',
    'LBL_ROUTING_SAVING_RULE' => 'Spremanje pravila',
    'LBL_ROUTING_SUB_DESC' => 'Označena pravila su aktivna. Kliknite na ime za urediti.',
    'LBL_ROUTING_TO' => 'prema',
    'LBL_ROUTING_TO_ADDRESS' => 'prema adresi',
    'LBL_ROUTING_WITH_TEMPLATE' => 'sa predloškom',
    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Ovaj zapis trenutno sadrži vrijednosti u poljima Uredski telefoni i Adrese. Kako bi zapisali preko tih vrijednosti sa sljedećim Uredski telefoni i Adrese od Klijenti koju ste odabrali, kliknite "OK". Za zadržati trenutne vrijednosti, kliknite "Odustani".',
    'LBL_DROP_HERE' => '[Odbaci ovdje]',
    'LBL_EMAIL_ACCOUNTS_EDIT' => 'Uredi',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Predpuni Gmail; Zadano',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Ime',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Svojstva odlaznog mail servera',
    'LBL_EMAIL_ACCOUNTS_SENDTYPE' => 'Agent transfera e-pošte.',
    'LBL_EMAIL_ACCOUNTS_SMTPAUTH_REQ' => 'Koristiti SMTP provjeru autentičnosti?',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'SMTP lozinka',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTP port',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'SMTP server',
    'LBL_EMAIL_ACCOUNTS_SMTPSSL' => 'Koristi SSL prilikom spajanja',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'SMTP korisničko ime',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Zadano',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Upozorenje: Nedostaje korisničko ime i lozinka za račun odlazne e-pošte.',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER_REQD' => 'Potrebno je SMTP korisničko ime',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS_REQD' => 'Potrebna je SMTP lozinka.',
    'LBL_EMAIL_ACCOUNTS_TITLE' => 'Upravljanje računom e-pošte',
    'LBL_EMAIL_POP3_REMOVE_MESSAGE' => 'Protokol tipa POP3 servera e-pošte neće biti podržan u sljedećoj verziji. Samo će IMAP biti podržan.',
    'LBL_INCOMING_EMAIL' => 'Dolazna e-pošta', //PR3333
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Postavite račun e-pošte za pregledavanje dolaznih e-pošta od vaših računa e-pošte.',
    'LBL_OUTGOING_EMAIL' => 'Odlazna e-pošta', //PR3333
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Pružite informacije SMTP servera e-pošte za korištenje odlaznih e-pošti u računu e-pošte.',
    'LBL_EMAIL_ADD' => 'Dodaj adresu',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Učinjeno',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Očisti',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Prema:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Cc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Bcc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'Prema/Cc/Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_LIST' => 'Nova lista',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'Adresa e-pošte',
    'LBL_EMAIL_ADDRESS_BOOK_ERR_NOT_CONTACT' => 'Trenutno je samo podržano uređivanje kontakata.',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filtriraj',
    'LBL_EMAIL_ADDRESS_BOOK_FIRST_NAME' => 'Ime računa/Naziv Klijenti',
    'LBL_EMAIL_ADDRESS_BOOK_LAST_NAME' => 'Prezime',
    'LBL_EMAIL_ADDRESS_BOOK_MY_CONTACTS' => 'Moji kontakti',
    'LBL_EMAIL_ADDRESS_BOOK_MY_LISTS' => 'Moje mailing liste',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Ime',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Adrese nisu pronađene',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Spremi i dodaj u adresar',
    'LBL_EMAIL_ADDRESS_BOOK_SEARCH' => 'Pretraživanje',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Odaberi primatelje e-pošte',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Adresar',
    'LBL_EMAIL_REPORTS_TITLE' => 'Izvještaji',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON' => SugarThemeRegistry::current()->getImage('icon_email_addressbook', '', null, null, '.gif', 'Address Book').' Address Book',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON_SHORT' => SugarThemeRegistry::current()->getImage('icon_email_addressbook', 'align=absmiddle border=0', 14, 14, '.gif', ''),
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Upozorenje! Odlazni račun koji pokušavati izbrisati povezan je sa postojećim dolaznim računom. Jesti li sigurni želite li nastaviti?',
    'LBL_EMAIL_ADDRESSES' => 'e-pošta',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'Adresa e-pošte',
    'LBL_EMAIL_ADDRESSES_TITLE' => 'Adrese e-pošta',
    'LBL_EMAIL_ARCHIVE_TO_SUGAR' => 'Import to SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Dodjela',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Prilijepi',
    'LBL_EMAIL_ATTACHMENT' => 'Prilijepi',
    'LBL_EMAIL_ATTACHMENTS' => 'Od lokalnog sustava',
    'LBL_EMAIL_ATTACHMENTS2' => 'From SuiteCRM Documents',
    'LBL_EMAIL_ATTACHMENTS3' => 'Predlošci privitaka',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Datoteka',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Dokument',
    'LBL_EMAIL_ATTACHMENTS_EMBEDED' => 'Ugrađeno',
    'LBL_EMAIL_BCC' => 'BCC',
    'LBL_EMAIL_CANCEL' => 'Odustani',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => 'Skup znakova',
    'LBL_EMAIL_CHECK' => 'Provjeri e-poštu',
    'LBL_EMAIL_CHECKING_NEW' => 'Provjeravanje nove e-pošte',
    'LBL_EMAIL_CHECKING_DESC' => 'Trenutak molim.. <br><br>Ako je ovo prvo provjeravanje e-pošte za ovaj račun, može potrajati neko vrijeme.',
    'LBL_EMAIL_CLOSE' => 'Zatvori',
    'LBL_EMAIL_COFFEE_BREAK' => 'Provjeravanje voe e-pošte. <br><br>Kod velikih računa e-pošte to može potrajati veći dio vremena.',
    'LBL_EMAIL_COMMON' => 'Uobičajeno',

    'LBL_EMAIL_COMPOSE' => 'e-pošta',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Molim unesite primatelja(e) za ovu e-poštu.',
    'LBL_EMAIL_COMPOSE_LINK_TO' => 'Udružite sa',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Tijelo ove e-pošte je prazno. Poslati svejedno?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Ova e-pošta nema subjekt. Poslati svejedno?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(bez subjekta)',
    'LBL_EMAIL_COMPOSE_READ' => 'Čitaj i sastavi e-poštu',
    'LBL_EMAIL_COMPOSE_SEND_FROM' => 'Poslano sa računa e-pošte',
    'LBL_EMAIL_COMPOSE_OPTIONS' => 'Opcije',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Molim unesite ispravnu adresu e-pošte za Prema, CC i BCC polja',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Odbaci ovu e-poštu?',
    'LBL_EMAIL_CONFIRM_DELETE' => 'Ukloniti ove unose iz Vašeg adresara?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Jeste li sigurni želite li izbrisati ovaj potpis?',

    'LBL_EMAIL_CREATE_NEW' => '--Kreiraj na Spremi--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Višestruko',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Isprazni',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Datum slanja prema pošiljatelju',
    'LBL_EMAIL_DATE_RECEIVED' => 'Datum zaprimanja',
    'LBL_EMAIL_ASSIGNED_TO_USER' => 'Dodijeljeno korisniku',
    'LBL_EMAIL_DATE_TODAY' => 'Danas',
    'LBL_EMAIL_DATE_YESTERDAY' => 'Jučer',
    'LBL_EMAIL_DD_TEXT' => 'e-pošta(e) odabrana.',
    'LBL_EMAIL_DEFAULTS' => 'Zadano',
    'LBL_EMAIL_DELETE' => 'Izbriši',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Izbriši odabrane poruke?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'E-pošta uspješno izbrisana.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Brisanje poruke',
    'LBL_EMAIL_DETAILS' => 'Detalji',
    'LBL_EMAIL_DISPLAY_MSG' => 'Prikaži e-poštu(e) {0} - {1} of {2}',
    'LBL_EMAIL_ADDR_DISPLAY_MSG' => 'Prikaži adresu(e) e-pošte {0} - {1} of {2}',

    'LBL_EMAIL_EDIT_CONTACT' => 'Uredi kontakt',
    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Samo će se primarna adresa koristiti u radu s kontaktima.',
    'LBL_EMAIL_EDIT_MAILING_LIST' => 'Uredite mailing listu',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Pražnjenje smeća',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Brisanje odlaznog servera',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Čišćenje datoteka predmemorije',
    'LBL_EMAIL_EMPTY_MSG' => 'Nema e-pošte za prikazati',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Nema adresa e-pošte za prikazati.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Folder name must be unique and not empty. Please try again.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Mapu nije moguće obrisati. Mapa ili njezin sadržaj ima poštu ili sandučić koji je povezan s njim.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Iz konteksta nije moguće odrediti namijenjenu mapu. Pokušajte ponovno.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Molimo provjerite vaše postavke.',
    'LBL_EMAIL_ERROR_CONTACT_NAME' => 'Molimo provjerite jeste li unijeli prezime.',
    'LBL_EMAIL_ERROR_DESC' => 'Otkrivene su greške:',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Nemate pristup ovom području. Kontaktirajte vašeg administratora stranice za dobivanje pristupa.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'SuiteCRM Folder names must be unique.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Unesite kriterij za pretraživanje.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Pojavila se greška',
    'LBL_EMAIL_ERROR_LIST_NAME' => 'Lista e-pošte s ovim imenom već postoji',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Poruka uklonjena sa Servera',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Poruka je ili uklonjena sa servera ili premještena u drugu mapu',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Veza prema serveru e-pošte nije uspjela. Molimo kontaktirajte vašeg Administratora',
    'LBL_EMAIL_ERROR_MOVE' => 'Premještanje e-pošte između servera i/ili računa e-pošte nije podržano u ovome trenutku.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Greška pri premještanju',
    'LBL_EMAIL_ERROR_NAME' => 'Ime je obavezno.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Polje Od Adrese je obavezno. Molimo unesti ispravnu adresu e-pošte.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Molimo navedite datoteku.',
    'LBL_EMAIL_ERROR_NO_IMAP_FOLDER_RENAME' => 'Preimenovanje IMAP mape nije podržano u ovome trenutku.',
    'LBL_EMAIL_ERROR_SERVER' => 'Ime servera e-pošte je obavezno.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Račun e-pošte možda nije spremljen.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Dogodila se greška pri komuniciranju sa serverom e-pošte.',
    'LBL_EMAIL_ERROR_USER' => 'Ime za prijavu je obavezno.',
    'LBL_EMAIL_ERROR_PASSWORD' => 'Lozinka je obavezna.',
    'LBL_EMAIL_ERROR_PORT' => 'Port servera e-pošte je obavezan.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Protokol servera je obavezan.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Monitored mapa je obavezna.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Trash mapa je obavezna.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Ova informacija nije dostupna',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Nije definiran server za izlaznu e-poštu.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, '.gif', '').'Mape',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_FOLDERS_ACTIONS' => 'Premjesti U',
    'LBL_EMAIL_FOLDERS_ADD' => 'Dodaj',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Dodaj novu Mapu',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Preimenuj Mapu',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Spremi',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Dodaj ovu mapu u',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Ova mapa ne može biti promijenjena',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Jeste li sigurni da želite obrisati ovu mapu?\n Ovaj proces se ne može poništiti.\n Brisanje mape uključuje i brisanje svih mapa unutar iste.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Novo Ime Mape',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Molimo odaberite mapu za izvođenje ove akcije.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Upravljanje Mapama',
    'LBL_EMAIL_FOLDERS_USING_GROUP_USER' => 'Koristeći Grupu',

    'LBL_EMAIL_FORWARD' => 'Proslijedi',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Preuzeto [[count]] of [[total]] e-pošte.',
    'LBL_EMAIL_FOUND' => 'Pronađeno',
    'LBL_EMAIL_FROM' => 'Od',
    'LBL_EMAIL_GROUP' => 'grupa',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Grupa',
    'LBL_EMAIL_HOME_FOLDER' => 'Početno',
    'LBL_EMAIL_HTML_RTF' => 'Pošalji HTML',
    'LBL_EMAIL_IE_DELETE' => 'Brisanje računa e-pošte',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Brisanje potpisa',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Jeste li sigurni želite li izbrisati ovaj račun e-pošte?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Uspješno izbrisano.',
    'LBL_EMAIL_IE_SAVE' => 'Spremanje informacija računa e-pošte.',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Uvoz e-pošte',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Import to SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Uvoz postavki',
    'LBL_EMAIL_INVALID' => 'Pogrešno',
    'LBL_EMAIL_LOADING' => 'Učitavanje...',
    'LBL_EMAIL_MARK' => 'Obilježi',
    'LBL_EMAIL_MARK_FLAGGED' => 'kao označeno',
    'LBL_EMAIL_MARK_READ' => 'kao pročitano',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'kao neoznačeno',
    'LBL_EMAIL_MARK_UNREAD' => 'kao nepročitano',
    'LBL_EMAIL_ASSIGN_TO' => 'Dodijeli',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Kreiraj mapu',
    'LBL_EMAIL_MENU_COMPOSE' => 'Sastavi za',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Izbriši mapu',
    'LBL_EMAIL_MENU_EDIT' => 'Uredi',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Isprazni smeće',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Sinhroniziraj',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Isprazni datoteke predmemorije',
    'LBL_EMAIL_MENU_REMOVE' => 'Ukloni',
    'LBL_EMAIL_MENU_RENAME' => 'Preimenuj',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Preimenuj Mapu',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Preimenovanje mape',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Molim učinite odabir prije obavljanja ove operacije.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Create a Folder (remote or in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_ARCHIVE' => 'Archive these email(s) to SuiteCRM',
    'LBL_EMAIL_MENU_HELP_COMPOSE_TO_LIST' => 'Pošalji e-poštu odabranim mailing listama.',
    'LBL_EMAIL_MENU_HELP_CONTACT_COMPOSE' => 'Pošalji e-poštu ovom kontaktu',
    'LBL_EMAIL_MENU_HELP_CONTACT_REMOVE' => 'Ukloni kontakt',
    'LBL_EMAIL_MENU_HELP_DELETE' => 'Izbrši ovaj e-mail(ove)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Delete a Folder (remote or in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EDIT_CONTACT' => 'Uredi kontakt',
    'LBL_EMAIL_MENU_HELP_EDIT_LIST' => 'Uredi mailing listu',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Prazni sve mape smeća za sve Vaše račune e-pošte',
    'LBL_EMAIL_MENU_HELP_MARK_FLAGGED' => 'Obilježi ovaj E-mail(ove) označenima',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Obilježi ovaj e-mail(ove) pročitanima',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Obilježi ovaj e-mail(ove) neoznačenima.',
    'LBL_EMAIL_MENU_HELP_MARK_UNREAD' => 'Obilježi ovaj e-mail(ove) nepročitanima.',
    'LBL_EMAIL_MENU_HELP_REMOVE_LIST' => 'Uklanja mailing liste',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Rename a Folder (remote or in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_REPLY' => 'Odgovori na ovaj e-mail(ove)',
    'LBL_EMAIL_MENU_HELP_REPLY_ALL' => 'Odgovori svima primateljima za ovaj e-mail(ove)',

    'LBL_EMAIL_MESSAGES' => 'poruke',

    'LBL_EMAIL_ML_NAME' => 'Ime liste',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Odabrane liste adresa',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Dostupne liste adresa',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Klik</b> za odabrati višestruko<br />(Mac korisnici koriste <b>CMD-Klik</b>)',

    'LBL_EMAIL_NO' => 'Ne',
    'LBL_EMAIL_NOT_SENT' => 'Sustav ne može procesuirati Vaš zahtjev. Molim kontaktirajte sistem administratora.',

    'LBL_EMAIL_OK' => 'OK',
    'LBL_EMAIL_ONE_MOMENT' => 'Trenutak molim...',
    'LBL_EMAIL_OPEN_ALL' => 'Otvori višestruke poruke',
    'LBL_EMAIL_OPTIONS' => 'Opcije',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Brzo sastavljanje',
    'LBL_EMAIL_OPT_OUT' => 'Odjavljeno',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Odjavljeno i pogrešno',
    'LBL_EMAIL_PAGE_AFTER' => 'od {0}',
    'LBL_EMAIL_PAGE_BEFORE' => 'Stranica',
    'LBL_EMAIL_PERFORMING_TASK' => 'Obavljanje zadatka',
    'LBL_EMAIL_PRIMARY' => 'Primarno',
    'LBL_EMAIL_PRINT' => 'Ispis',

    'LBL_EMAIL_QC_BUGS' => 'Bug',
    'LBL_EMAIL_QC_CASES' => 'Slučaj',
    'LBL_EMAIL_QC_LEADS' => 'Potencijalni klijent',
    'LBL_EMAIL_QC_CONTACTS' => 'Kontakt',
    'LBL_EMAIL_QC_TASKS' => 'Zadatak',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Prodajna prilika',
    'LBL_EMAIL_QUICK_CREATE' => 'Brzo kreiranje',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Obnavljanje mapa',
    'LBL_EMAIL_RELATE_TO' => 'Poveži',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Pregledaj veze',
    'LBL_EMAIL_RECORD' => 'Zapis e-pošte',
    'LBL_EMAIL_REMOVE' => 'Ukloni',
    'LBL_EMAIL_REPLY' => 'Odgovori',
    'LBL_EMAIL_REPLY_ALL' => 'Odgovori svima',
    'LBL_EMAIL_REPLY_TO' => 'Odgovori prema',
    'LBL_EMAIL_RETRIEVING_LIST' => 'Zapreimanje liste e-pošte',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Zaprimanje poruke',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Zaprimanje zapisa e-pošte',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Molim odaberite samo jedan zapis e-pošte',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Povratak na prethodni modul?',
    'LBL_EMAIL_REVERT' => 'Vrati',
    'LBL_EMAIL_RELATE_EMAIL' => 'Poveži e-poštu',

    'LBL_EMAIL_RULES_TITLE' => 'Upravljanje pravilima',

    'LBL_EMAIL_SAVE' => 'Spremi',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Spremi i odgovori',
    'LBL_EMAIL_SAVE_DRAFT' => 'Spremi skicu',

    'LBL_EMAIL_SEARCHING' => 'Provođenje pretraživanja',
    'LBL_EMAIL_SEARCH' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_SEARCH_SHORT' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_SEARCH_ADVANCED' => 'Napredna Pretraga',
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Datum Od',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Datum Do',
    'LBL_EMAIL_SEARCH_FULL_TEXT' => 'Tekst tijela',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Nema rezultata koji se podudaraju sa Vašim kriterijima pretraživanja.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Pretraga rezultata',
    'LBL_EMAIL_SEARCH_TITLE' => 'Jednostavno pretraživanje',
    'LBL_EMAIL_SEARCH__FROM_ACCOUNTS' => 'Pretraživanje računa e-pošte',

    'LBL_EMAIL_SELECT' => 'Odaberi',

    'LBL_EMAIL_SEND' => 'Pošalji',
    'LBL_EMAIL_SENDING_EMAIL' => 'Slanje e-pošte',

    'LBL_EMAIL_SETTINGS' => 'Postavke',
    'LBL_EMAIL_SETTINGS_2_ROWS' => '2 retka',
    'LBL_EMAIL_SETTINGS_3_COLS' => '3 stupca',
    'LBL_EMAIL_SETTINGS_LAYOUT' => 'Stil izgleda',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Računi e-pošte',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Očisti obrazac',
    'LBL_EMAIL_SETTINGS_AUTO_IMPORT' => 'Import Email Upon View',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Provjeri novu e-poštu',
    'LBL_EMAIL_SETTINGS_COMPOSE_INLINE' => 'Use Preview Pane',
    'LBL_EMAIL_SETTINGS_COMPOSE_POPUP' => 'Koristi iskočni prozor',
    'LBL_EMAIL_SETTINGS_DISPLAY_NUM' => 'Broj emailova po stranici',
    'LBL_EMAIL_SETTINGS_EDIT_ACCOUNT' => 'Uredi račun e-pošte',
    'LBL_EMAIL_SETTINGS_FOLDERS' => 'Mape',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Od adrese',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Adresa e-pošte za test notifikacije:',
    'LBL_EMAIL_SETTINGS_TO_EMAIL_ADDR' => 'Za Adresa e-pošte',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Od imena',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Odgovori Adresa e-pošte',
    'LBL_EMAIL_SETTINGS_FULL_SCREEN' => 'Puni zaslon',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Sinhroniziraj sve račune e-pošte',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'An email was sent to the specified email address using the provided outgoing mail settings. Please check to see if the email was received to verify the settings are correct.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_DESC' => 'Poduzimanje ove radnje sinhronizirati će račune e-pošte i njihove sadržaje.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Izvršiti punu sinhronizaciju?\nVeliki računi e-pošte mogu potrajati nekoliko minuta.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Kliknite Shift tipku ili Ctrl tipku za odabrati više mapa.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Općenito',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS' => 'Dostupne grupne mape',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Kreiraj grupne mape',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_Save' => 'Spremanje grupnih mapa',
    'LBL_EMAIL_SETTINGS_RETRIEVING_GROUP' => 'Zaprimanje grupne mape',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Uredi grupnu mapu',

    'LBL_EMAIL_SETTINGS_NAME' => 'Ime računa e-pošte',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Odaberite broj e-pošte po stranici u pretincu. Ova postavka može zahtjevati osvježavanje stranice kako bi se aktivirala.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Zaprimanje računa e-pošte',
    'LBL_EMAIL_SETTINGS_RULES' => 'Pravila',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Postavke su spremljene.\n\nMorate ponovo učitati stranicu kako bi nove postavke poprimile efekt.',
    'LBL_EMAIL_SETTINGS_SAVED_NO_REFRESH' => 'The settings have been saved.', //PR3333
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Šalji samo e-poštu s običnim tekstom',
    'LBL_EMAIL_SETTINGS_SHOW_IN_FOLDERS' => 'aktivni računi e-pošte',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'E-pošte po stranici',
    'LBL_EMAIL_SETTINGS_TAB_POS' => 'Stavite tabove na dno',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Vizualne postavke',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Postavke',
    'LBL_EMAIL_SETTINGS_TOGGLE_ADV' => 'Prikaži napredno',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Dostupne korisničke mape',
    'LBL_EMAIL_ERROR_PREPEND' => 'Greška:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Server odlazne e-pošte odabran za račun e-pošte koji koristite je pogrešan. Provjerite postavke ili odaberite drugi server za račun e-pošte.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Server odlazne pošte nije podešen za slanje e-pošte. Molim konfigurirajte server odlazne e-pošte ili odaberite server odlazne pošte za račun e-pošte koji koristite u Postavke >> Račun e-pošte.',
    'LBL_EMAIL_SHOW_READ' => 'Prikaži sve',
    'LBL_EMAIL_SHOW_UNREAD_ONLY' => 'Prikaži samo nepročitano',
    'LBL_EMAIL_SIGNATURES' => 'Potpisi',
    'LBL_EMAIL_SIGNATURE_CREATE' => 'Kreiraj potpis',
    'LBL_EMAIL_SIGNATURE_NAME' => 'Ime potpisa',
    'LBL_EMAIL_SIGNATURE_TEXT' => 'Tijelo potpisa',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Ostalo',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Daljinske mape ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[ SuiteCRM Folders ]',
    'LBL_EMAIL_SUBJECT' => 'Subjekt',
    'LBL_EMAIL_SUCCESS' => 'Uspjeh',
    'LBL_EMAIL_SUGAR_FOLDER' => 'SuiteCRM Folder',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Tijelo predloška e-pošte je prazno',
    'LBL_EMAIL_TEMPLATES' => 'Predlošci',
    'LBL_EMAIL_TEXT_FIRST' => 'Prva stranica',
    'LBL_EMAIL_TEXT_PREV' => 'Prethodna stranica',
    'LBL_EMAIL_TEXT_NEXT' => 'Sljedeća stranica',
    'LBL_EMAIL_TEXT_LAST' => 'Zadnja stranica',
    'LBL_EMAIL_TEXT_REFRESH' => 'Osvježi',
    'LBL_EMAIL_TO' => 'Prema',
    'LBL_EMAIL_TOGGLE_LIST' => 'Uključi listu',
    'LBL_EMAIL_VIEW' => 'Pregledaj',
    'LBL_EMAIL_VIEWS' => 'Pogleda',
    'LBL_EMAIL_VIEW_HEADERS' => 'Prikaži zaglavlja',
    'LBL_EMAIL_VIEW_PRINTABLE' => 'Verzija za ispis',
    'LBL_EMAIL_VIEW_RAW' => 'Display Raw Email',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Ovo svojstvo nije podržano kada se koristi sa POP3.',
    'LBL_DEFAULT_LINK_TEXT' => 'Zadani tekst poveznice.',
    'LBL_EMAIL_YES' => 'Da',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Pošalji testnu e-poštu',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Testna e-pošta poslana',
    'LBL_EMAIL_MESSAGE_NO' => 'Message No',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Uvoz prošao',
    'LBL_EMAIL_IMPORT_FAIL' => 'Uvoz neuspješan jer je poruka već uvezena ili izbrisana sa servera',

    'LBL_LINK_NONE' => 'Nijedan',
    'LBL_LINK_ALL' => 'Sve',
    'LBL_LINK_RECORDS' => 'Zapisi',
    'LBL_LINK_SELECT' => 'Odaberi',
    'LBL_LINK_ACTIONS' => 'Radnje', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_LINK_MORE' => 'Više',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Potvrdi',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Želite li zatvoriti ovaj #module#?',
    'LBL_CLOSE_ACTIVITY_REMEMBER' => 'Ne prikazuj  ovu poruku ubuduće: &nbsp;',
    'LBL_INVALID_FILE_EXTENSION' => 'Pogrešna ekstenzija datoteke',

    'ERR_AJAX_LOAD' => 'Pojavila se greška:',
    'ERR_AJAX_LOAD_FAILURE' => 'Pojavila se greška kod procesuiranja Vašeg zahtjeva, molim pokušajte ponovo kasnije.',
    'ERR_AJAX_LOAD_FOOTER' => 'Ako se greška ponavlja, neka Vaš administrator onemogući Ajax za ovaj modul',
    'ERR_CREATING_FIELDS' => 'Greška ispunjavanja dodatnih detalja polja:',
    'ERR_CREATING_TABLE' => 'Greška kreiranja tablice:',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Odvajatelj decimala ne može koristiti isti znak kao i odvajatelj tisućica.\n\n Molim promijenite vrijednosti.',
    'ERR_DELETE_RECORD' => 'Broj zapisa mora biti označen kako bi se izbrisao kontakt.',
    'ERR_EXPORT_DISABLED' => 'Izvoz onemogućen.',
    'ERR_EXPORT_TYPE' => 'Greška izvoza',
    'ERR_INVALID_AMOUNT' => 'Molim unesite važeći iznos.',
    'ERR_INVALID_DATE_FORMAT' => 'Format datuma mora biti:',
    'ERR_INVALID_DATE' => 'Molim unesite važeći datum.',
    'ERR_INVALID_DAY' => 'Molim unesite važeći dan.',
    'ERR_INVALID_EMAIL_ADDRESS' => 'nije važeća adresa e-pošte.',
    'ERR_INVALID_FILE_REFERENCE' => 'Pogrešna referenca datoteke',
    'ERR_INVALID_HOUR' => 'Molim unesite važeći sat.',
    'ERR_INVALID_MONTH' => 'Molim unesite važeći mjesec.',
    'ERR_INVALID_TIME' => 'Molim unesite važeće vrijeme.',
    'ERR_INVALID_YEAR' => 'Molim unesite važeću godinu sa 4 znamenke.',
    'ERR_NEED_ACTIVE_SESSION' => 'Potrebna je aktivna sesija za izvoz sadržaja.',
    'ERR_NO_HEADER_ID' => 'Ovo svojstvo je nedostupni u ovoj temi.',
    'ERR_NOT_ADMIN' => 'Neautorizirani pristup administraciji.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Nedostaje potrebno polje:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Pogrešno potrebno polje:',
    'ERR_INVALID_VALUE' => 'Pogrešna vrijednost:',
    'ERR_NO_SUCH_FILE' => 'Datoteka ne postoji u sustavu',
    'ERR_NO_SINGLE_QUOTE' => 'Ne može se koristiti jednostruki citat za',
    'ERR_NOTHING_SELECTED' => 'Molim učinite odabir prije nastavka.',
    'ERR_OPPORTUNITY_NAME_DUPE' => 'Prodajna prilika sa imenom %s već postiji. Molim unesite drugo ime ispod.',
    'ERR_OPPORTUNITY_NAME_MISSING' => 'Ime prodajne prilike nije uneseno. Molim unesite ime prodajne prilike ispod.',
    'ERR_POTENTIAL_SEGFAULT' => 'A potential Apache segmentation fault was detected.  Please notify your system administrator to confirm this problem and have her/him report it to SuiteCRM.',
    'ERR_SELF_REPORTING' => 'Korisnik ne može izvještavati samom ili samoj sebi.',
    'ERR_SINGLE_QUOTE' => 'Korištenje jednostukog navoda nije podržano za ovo polje. Molim promijenite vrijednost.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Nema podudaranja za polje:',
    'ERR_SQS_NO_MATCH' => 'Nema podudaranja',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Please specify \'key\' index in displayParams attribute for the Meta-Data definition',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Greška: Ime portala je već dodijeljeno drugom kontaktu.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Vrijednost polja nije kompatibilna sa vrijednošću preciznosti.',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'An error occurred when trying to save to the external account.',
    'ERR_EXTERNAL_API_UPLOAD_FAIL' => 'An error occurred while uploading.  Please ensure the file you are uploading is not empty.',
    'ERR_NO_DB' => 'Could not connect to the database. Please refer to suitecrm.log for details.',
    'ERR_DB_FAIL' => 'Database failure. Please refer to suitecrm.log for details.',
    'ERR_EXTERNAL_API_403' => 'Dopuštenje odbijeno. Tip datoteke nije podržan.',
    'ERR_EXTERNAL_API_NO_OAUTH_TOKEN' => 'OAuth pristupni token nedostaje.',
    'ERR_DB_VERSION' => 'SuiteCRM {0} Files May Only Be Used With A SuiteCRM {1} Database.',

    'LBL_ACCOUNT' => 'Klijent',
    'LBL_OLD_ACCOUNT_LINK' => 'Stari račun',
    'LBL_ACCOUNTS' => 'Računi',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Pregledaj rezime',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Pregledaj rezime',
    'LBL_ADD_BUTTON_KEY' => 'A',
    'LBL_ADD_BUTTON_TITLE' => 'Dodaj',
    'LBL_ADD_BUTTON' => 'Dodaj',
    'LBL_ADD_DOCUMENT' => 'Dodaj dokument',
    'LBL_REPLACE_BUTTON' => 'Zamijeni',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Dodaj na Listu Ciljeva',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Dodaj na Listu Ciljeva',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Dodaj kontakt na listu ciljeva',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Klikni za zatvoriti',
    'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Zatvori',
    'LBL_ADDITIONAL_DETAILS' => 'Dodatni detalji',
    'LBL_ADMIN' => 'Administrator',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Arhiviraj',
    'LBL_ASSIGNED_TO_USER' => 'Dodijeljeno korisniku',
    'LBL_ASSIGNED_TO' => 'Dodijeljeno:',
    'LBL_BACK' => 'Natrag',
    'LBL_BILL_TO_ACCOUNT' => 'Naplati za tvrtku',
    'LBL_BILL_TO_CONTACT' => 'Naplati za kontakt',
    'LBL_BILLING_ADDRESS' => 'Adresa za naplatu',
    'LBL_QUICK_CREATE_TITLE' => 'Brzo kreiranje',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - Open Source CRM',
    'LBL_BUGS' => 'Bugovi',
    'LBL_BY' => 'by',
    'LBL_CALLS' => 'Pozivi',
    'LBL_CALL' => 'Poziv',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Pošalji kampanjsku e-poštu na čekanju',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Pošalji',
    'LBL_CASE' => 'Slučaj',
    'LBL_CASES' => 'Slučajevi',
    'LBL_CHANGE_BUTTON_KEY' => 'G',
    'LBL_CHANGE_PASSWORD' => 'Promijeni lozinku',
    'LBL_CHANGE_BUTTON_LABEL' => 'Promijeni',
    'LBL_CHANGE_BUTTON_TITLE' => 'Promijeni',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Provjeri Sve',
    'LBL_CITY' => 'Grad',
    'LBL_CLEAR_BUTTON_KEY' => 'C',
    'LBL_CLEAR_BUTTON_LABEL' => 'Očisti',
    'LBL_CLEAR_BUTTON_TITLE' => 'Očisti',
    'LBL_CLEARALL' => 'Očisti sve',
    'LBL_CLOSE_BUTTON_TITLE' => 'Zatvori', // As in closing a task
    'LBL_CLOSE_BUTTON_KEY' => 'Q',
    'LBL_CLOSE_WINDOW' => 'Zatvori prozor',
    'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
    'LBL_CLOSEALL_BUTTON_LABEL' => 'Zatvori sve',
    'LBL_CLOSEALL_BUTTON_TITLE' => 'Zatvori sve',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Zatvori i kreiraj novo', // As in closing a task
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Zatvori i kreiraj novo', // As in closing a task
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Otvori stavke:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Sastavi e-poštu',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Sastavi e-poštu',
    'LBL_SEARCH_DROPDOWN_YES' => 'Da',
    'LBL_SEARCH_DROPDOWN_NO' => 'Ne',
    'LBL_CONTACT_LIST' => 'Lista kontakata',
    'LBL_CONTACT' => 'Kontakt',
    'LBL_CONTACTS' => 'Kontakti',
    'LBL_CONTRACT' => 'Ugovor',
    'LBL_CONTRACTS' => 'Ugovori',
    'LBL_COUNTRY' => 'Država',
    'LBL_CREATE_BUTTON_LABEL' => 'Kreiraj', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CREATED_BY_USER' => 'Kreirao Korisnik',
    'LBL_CREATED_USER' => 'Kreirao Korisnik',
    'LBL_CREATED_ID' => 'Kreirano od Id',
    'LBL_CREATED' => 'Kreirano od',
    'LBL_CURRENT_USER_FILTER' => 'Moje stavke:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_DOCUMENTS' => 'Dokumenti',
    'LBL_DATE_ENTERED' => 'Datum stvaranja',
    'LBL_DATE_MODIFIED' => 'Datum izmjene',
    'LBL_EDIT_BUTTON' => 'Uredi',
    'LBL_DUPLICATE_BUTTON' => 'Duplikat',
    'LBL_DELETE_BUTTON' => 'Izbriši',
    'LBL_DELETE' => 'Izbriši',
    'LBL_DELETED' => 'Izbrisano',
    'LBL_DIRECT_REPORTS' => 'Direktno izvještava',
    'LBL_DONE_BUTTON_KEY' => 'X',
    'LBL_DONE_BUTTON_LABEL' => 'Učinjeno',
    'LBL_DONE_BUTTON_TITLE' => 'Učinjeno',
    'LBL_DST_NEEDS_FIXIN' => 'Ova aplikacija zahtjeva primijenjivanje ispravka ljetnog računanja vremena. Molim idite na <a href="index.php?module=Administration&action=DstFix">Popravi</a> poveznicu u administratorskoj konzoli i primijenite ispravak ljetnog računanja vremena.',
    'LBL_EDIT_AS_NEW_BUTTON_LABEL' => 'Uredi kao Novo',
    'LBL_EDIT_AS_NEW_BUTTON_TITLE' => 'Uredi kao novo',
    'LBL_FAVORITES' => 'Omiljeni',
    'LBL_FILTER_MENU_BY' => 'Filtriraj izbornik prema',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Molim odaberite vCard datoteku',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard nema sva potrebna polja za ovaj modul. Molim referirajte se sa suitecrm.log za detalje.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Uploadana datoteka premašuje ograničenje od 30000 bajtova koje je određeno u HTML formi.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Pojavila se greška kod uploadanja vCard datoteke. Molim referirajte se sa suitecrm.log za detalje.',
    'LBL_IMPORT_VCARD' => 'Uvoz vCard:',
    'LBL_IMPORT_VCARD_BUTTON_KEY' => 'I',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Uvoz vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Uvoz vCard',
    'LBL_VIEW_BUTTON_KEY' => 'V',
    'LBL_VIEW_BUTTON_LABEL' => 'Pregledaj',
    'LBL_VIEW_BUTTON_TITLE' => 'Pregledaj',
    'LBL_VIEW_BUTTON' => 'Pregledaj',
    'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Email PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Email PDF',
    'LBL_EMAILS' => 'E-mailovi',
    'LBL_EMPLOYEES' => 'Zaposlenici',
    'LBL_ENTER_DATE' => 'Unesite datum',
    'LBL_EXPORT_ALL' => 'Izvedi sve',
    'LBL_EXPORT' => 'Izvoz',
    'LBL_FAVORITES_FILTER' => 'Moji favoriti:',
    'LBL_GO_BUTTON_LABEL' => 'Idi',
    'LBL_GS_HELP' => 'The fields in this module used in this search appear above.  The highlighted text matches your search criteria.',
    'LBL_HIDE' => 'Sakrij',
    'LBL_ID' => 'ID',
    'LBL_IMPORT' => 'Uvoz',
    'LBL_IMPORT_STARTED' => 'Import Started: ',
    'LBL_MISSING_CUSTOM_DELIMITER' => 'Must specify a custom delimiter.',
    'LBL_LAST_VIEWED' => 'Nedavno pregledano',
    'LBL_SHOW_LESS' => 'Prikaži manje',
    'LBL_SHOW_MORE' => 'Prikaži više',
    'LBL_TODAYS_ACTIVITIES' => 'Današnje aktivnosti',
    'LBL_LEADS' => 'Potencijalni klijenti',
    'LBL_LESS' => 'Manje',
    'LBL_CAMPAIGN' => 'Kampanja:',
    'LBL_CAMPAIGNS' => 'Kampanje',
    'LBL_CAMPAIGNLOG' => 'Dnevnik kampanje',
    'LBL_CAMPAIGN_CONTACT' => 'Kampanje',
    'LBL_CAMPAIGN_ID' => 'kampanja_id',
    'LBL_CAMPAIGN_NONE' => '-Nijedan-',
    'LBL_SITEMAP' => 'Sitemap',
    'LBL_THEME' => 'Tema:',
    'LBL_THEME_PICKER' => 'Stil stranice',
    'LBL_THEME_PICKER_IE6COMPAT_CHECK' => 'Upozorenje: Internet Explorer 6 nije podržan za odabranu temu. Kliknite OK kako bi temu svejedno odabrati or Odustani za odabrati drugačiju temu.',
    'LBL_FOUND_IN_RELEASE' => 'Pronađeno u distribuciji',
    'LBL_FIXED_IN_RELEASE' => 'Ispravljeno u distribuciji',
    'LBL_LIST_ACCOUNT_NAME' => 'Ime klijenta',
    'LBL_LIST_ASSIGNED_USER' => 'Korisnik',
    'LBL_LIST_CONTACT_NAME' => 'Ime kontakta',
    'LBL_LIST_CONTACT_ROLE' => 'Uloga kontakta',
    'LBL_LIST_DATE_ENTERED' => 'Kreirano:',
    'LBL_LIST_EMAIL' => 'E-mail',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_OF' => 'od',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_RELATED_TO' => 'Povezano sa',
    'LBL_LIST_USER_NAME' => 'Korisničko ime',
    'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Jeste li sigurni želite li ažurirati cijelu listu?',
    'LBL_LISTVIEW_NO_SELECTED' => 'Molim odaberite barem 1 zapis za nastavak.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Molim odaberite barem 2 zapisa za nastavak.',
    'LBL_LISTVIEW_LESS_THAN_TEN_SELECT' => 'Molim odaberite manje od 10 zapisa za nastavak.',
    'LBL_LISTVIEW_ALL' => 'Sve',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Odabrani zapisi',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Odabrano:',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'David',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_LOGIN_TO_ACCESS' => 'Molim prijavite se za pristup ovom području.',
    'LBL_LOGOUT' => 'Odjavi se',
    'LBL_PROFILE' => 'Profil',
    'LBL_MAILMERGE_KEY' => 'M',
    'LBL_MAILMERGE' => 'Spajanje e-pošte',
    'LBL_MASS_UPDATE' => 'Masovno ažuriranje',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Nema dostupnih polja za operaciju masovnog ažuriranja',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Odjavna primarna e-pošta',
    'LBL_MEETINGS' => 'Sastanci',
    'LBL_MEETING' => 'Sastanak',
    'LBL_MEETING_GO_BACK' => 'Povratak na sastanak',
    'LBL_MEMBERS' => 'Članovi',
    'LBL_MEMBER_OF' => 'Član od',
    'LBL_MODIFIED_BY_USER' => 'Izmijenio Korisnik',
    'LBL_MODIFIED_USER' => 'Izmijenio Korisnik',
    'LBL_MODIFIED' => 'Izmijenjeno od',
    'LBL_MODIFIED_NAME' => 'Izmijenjeno prema Nazivu',
    'LBL_MODIFIED_ID' => 'Izmjenjeno od',
    'LBL_MORE' => 'Više',
    'LBL_MY_ACCOUNT' => 'Moje postavke',
    'LBL_NAME' => 'Ime',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Kreiraj',
    'LBL_NEW_BUTTON_TITLE' => 'Kreiraj',
    'LBL_NEXT_BUTTON_LABEL' => 'Sljedeće',
    'LBL_NONE' => '-Nijedan-',
    'LBL_NOTES' => 'Zabilješke',
    'LBL_OPENALL_BUTTON_KEY' => 'O',
    'LBL_OPENALL_BUTTON_LABEL' => 'Otvori sve',
    'LBL_OPENALL_BUTTON_TITLE' => 'Otvori sve',
    'LBL_OPENTO_BUTTON_KEY' => 'T',
    'LBL_OPENTO_BUTTON_LABEL' => 'Otvori prema:',
    'LBL_OPENTO_BUTTON_TITLE' => 'Otvori prema:',
    'LBL_OPPORTUNITIES' => 'Prilike',
    'LBL_OPPORTUNITY_NAME' => 'Ime prodajne prilike',
    'LBL_OPPORTUNITY' => 'Prodajna prilika',
    'LBL_OR' => 'ili',
    'LBL_LOWER_OR' => 'ili',
    'LBL_PANEL_OVERVIEW' => 'Pregled', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PANEL_ASSIGNMENT' => 'Ostalo', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PANEL_ADVANCED' => 'Više informacija', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PARENT_TYPE' => 'Matični tip',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_PHASE' => 'Raspon',
    'LBL_POSTAL_CODE' => 'Poštanski broj:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Grad primarne adrese:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Zemlja primarne adrese:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Poštanski broj primarne adrese:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primarna adresa županije',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primarna adresa ulica 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primarna adresa ulica 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Ulica primarne adrese:',
    'LBL_PRIMARY_ADDRESS' => 'Primarna adresa:',

    'LBL_BILLING_STREET' => 'Ulica:',
    'LBL_SHIPPING_STREET' => 'Uilca:',

    'LBL_PROSPECTS' => 'Prospects',
    'LBL_PRODUCT_BUNDLES' => 'Paketi proizvoda',
    'LBL_PRODUCTS' => 'Proizvodi',
    'LBL_PROJECT_TASKS' => 'Projektni zadaci',
    'LBL_PROJECTS' => 'Projekti',
    'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
    'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Kreiraj prodajnu priliku iz ponude',
    'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Kreiraj prodajnu priliku iz ponude',
    'LBL_QUOTES_SHIP_TO' => 'Dostava ponudu na',
    'LBL_QUOTES' => 'Ponude',

    'LBL_RELATED' => 'Povezano',
    'LBL_RELATED_INFORMATION' => 'Povezana informacija',
    'LBL_RELATED_RECORDS' => 'Povezani zapisi',
    'LBL_REMOVE' => 'Ukloni',
    'LBL_REPORTS_TO' => 'Izvještava prema',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Ukazuje na potrebno polje',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Učinjeno'
    'LBL_SAVE_AS_BUTTON_KEY' => 'A',
    'LBL_SAVE_AS_BUTTON_LABEL' => 'Spremi kao',
    'LBL_SAVE_AS_BUTTON_TITLE' => 'Spremi kao',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Puna forma',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Puna forma',
    'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Spremi i kreiraj novo',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Spremi i kreiraj novo',
    'LBL_SAVE_OBJECT' => 'Spremi {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Filtriraj',
    'LBL_SEARCH_BUTTON_TITLE' => 'Filtriraj',
    'LBL_SEARCH' => 'Filtriraj',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_TIPS' => 'Press the search button or click enter to get an exact match for them.',
    'LBL_SEARCH_TIPS_2' => 'Press the search button or click enter to get an exact match for',
    'LBL_SEARCH_MORE' => 'više',
    'LBL_SEE_ALL' => 'Vidi sve',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Pogrešan format datoteke, samo se slikovne datoteke mogu uploadati.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Odaberi',
    'LBL_SELECT_BUTTON_TITLE' => 'Odaberi',
    'LBL_SELECT_TEAMS_KEY' => 'Z',
    'LBL_SELECT_TEAMS_LABEL' => 'Dodaj tim(ove)',
    'LBL_SELECT_TEAMS_TITLE' => 'Dodaj tim(ove)',
    'LBL_BROWSE_DOCUMENTS_BUTTON_KEY' => 'B',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Pregledaj dokumente',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Pregledaj dokumente',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Odaberi kontakt',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Odaberi kontakt',
    'LBL_GRID_SELECTED_FILE' => 'odabrana datoteka',
    'LBL_GRID_SELECTED_FILES' => 'odabrane datoteke',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Odaberi iz izvještaja',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Odaberi izvještaje',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Odaberi korisnika',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Odaberi korisnika',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Očisti odabir',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Očisti odabir',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Očisti odabir',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Očisti odabir',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Odaberi datoteku',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Odaberi datoteku',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Očisti datoteku',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Očisti datoteku',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Odaberi korisnika',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Odaberi korisnika',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Očisti korisnika',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Očisti korisnika',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Odaberi klijenta',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Odaberi klijenta',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Očisti klijenta',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Očisti klijenta',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Odaberi kampanju',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Odaberi kampanju',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Očisti kampanju',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Očisti kampanju',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Odaberi kontakt',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Odaberi kontakt',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Očisti kontakt',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Očisti kontakt',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Odaberi tim',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Odaberi tim',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Očisti tim',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Očisti tim',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Resursi korišteni u izradi ove stranice (upiti, datoteke)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'sekunda.',
    'LBL_SERVER_RESPONSE_TIME' => 'Vrijeme odaziva servera:',
    'LBL_SERVER_MEMORY_BYTES' => 'bajtova',
    'LBL_SERVER_MEMORY_USAGE' => 'Zauzeće memorije servera: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Korištenje: - modul: {0} - radnja: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Vrhunac zauzeća memorije servera: {0} ({1})',
    'LBL_SHIP_TO_ACCOUNT' => 'Dostavi za klijenta',
    'LBL_SHIP_TO_CONTACT' => 'Dostavi za kontakt',
    'LBL_SHIPPING_ADDRESS' => 'Adresa za dostavu',
    'LBL_SHORTCUTS' => 'Prečaci',
    'LBL_SHOW' => 'Prikaži',
    'LBL_SQS_INDICATOR' => '',
    'LBL_STATE' => 'Stanje:', //Used for Case State, situation, condition
    'LBL_STATUS_UPDATED' => 'Vaš status za ovaj događaj je ažuriran!',
    'LBL_STATUS' => 'Status:',
    'LBL_STREET' => 'Ulica',
    'LBL_SUBJECT' => 'Subjekt',

    'LBL_INBOUNDEMAIL_ID' => 'ID dolazne e-pošte',

    /* The following version of LBL_SUGAR_COPYRIGHT is intended for Sugar Open Source only. */

    'LBL_SUGAR_COPYRIGHT' => '&copy; 2004-2013 SugarCRM Inc. The Program is provided AS IS, without warranty.  Licensed under <a href="LICENSE.txt" target="_blank" class="copyRightLink">AGPLv3</a>.<br />SugarCRM is a trademark of SugarCRM, Inc. All other company and product names may be trademarks of the respective companies with which they are associated.',

    // The following version of LBL_SUGAR_COPYRIGHT is for Professional and Enterprise editions.

    'LBL_SUGAR_COPYRIGHT_SUB' => '&copy; 2004-2013 <a href="http://www.sugarcrm.com" target="_blank" class="copyRightLink">SugarCRM Inc.</a> All Rights Reserved.<br />SugarCRM is a trademark of SugarCRM, Inc. All other company and product names may be trademarks of the respective companies with which they are associated.',

    'LBL_SCENARIO_SALES' => 'Prodaje',
    'LBL_SCENARIO_MARKETING' => 'Marketing',
    'LBL_SCENARIO_FINANCE' => 'Financije',
    'LBL_SCENARIO_SERVICE' => 'Usluga',
    'LBL_SCENARIO_PROJECT' => 'Project Management',

    'LBL_SCENARIO_SALES_DESCRIPTION'=>'This scenario facilitates the management of sales items',
    'LBL_SCENARIO_MAKETING_DESCRIPTION'=>'This scenario facilitates the management of marketing items',
    'LBL_SCENARIO_FINANCE_DESCRIPTION'=>'This scenario facilitates the management of finance related items',
    'LBL_SCENARIO_SERVICE_DESCRIPTION'=>'This scenario facilitates the management of service related items',
    'LBL_SCENARIO_PROJECT_DESCRIPTION'=>'This scenario faciliates the management of project related items',

    'LBL_SYNC' => 'Sinhronizacija',
    'LBL_TABGROUP_ALL' => 'Sve',
    'LBL_TABGROUP_ACTIVITIES' => 'Aktivnosti',
    'LBL_TABGROUP_COLLABORATION' => 'Kolaboracija',
    'LBL_TABGROUP_HOME' => 'Nadzorna ploča',
    'LBL_TABGROUP_MARKETING' => 'Marketing',
    'LBL_TABGROUP_MY_PORTALS' => 'Moje stranice',
    'LBL_TABGROUP_OTHER' => 'Ostalo',
    'LBL_TABGROUP_REPORTS' => 'Izvještaji',
    'LBL_TABGROUP_SALES' => 'Prodaje',
    'LBL_TABGROUP_SUPPORT' => 'Podrška',
    'LBL_TABGROUP_TOOLS' => 'Alati',
    'LBL_TASKS' => 'Zadaci',
    'LBL_TEAMS_LINK' => 'Timovi',
    'LBL_THEME_COLOR' => 'Boja',
    'LBL_THEME_FONT' => 'Font',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arhiviraj e-poštu',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arhiviraj e-poštu',
    'LBL_UNAUTH_ADMIN' => 'Neautorizirani pristup administraciji',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Povrati',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Povrati',
    'LBL_UNDELETE_BUTTON' => 'Povrati',
    'LBL_UNDELETE' => 'Povrati',
    'LBL_UNSYNC' => 'Odsinhroniziraj',
    'LBL_UPDATE' => 'Ažuriraj',
    'LBL_USER_LIST' => 'Lista korisnika',
    'LBL_USERS_SYNC' => 'Korisnička sinhronizacija',
    'LBL_USERS' => 'Korisnik',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Provjera postojećih unosa e-pošte...',
    'LBL_VERIFY_PORTAL_NAME' => 'Provjera postojećeg imena portala...',
    'LBL_VIEW_IMAGE' => 'pogledaj',
    'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
    'LBL_VIEW_PDF_BUTTON_LABEL' => 'Ispiši kao PDF',
    'LBL_VIEW_PDF_BUTTON_TITLE' => 'Ispiši kao PDF',

    'LNK_ABOUT' => 'O SuiteCRM',
    'LNK_ADVANCED_FILTER' => 'Napredni Filter',
    'LNK_BASIC_FILTER' => 'Brzi Filter',
    'LBL_ADVANCED_SEARCH' => 'Napredni Filter',
    'LBL_QUICK_FILTER' => 'Brzi Filter',
    'LNK_SEARCH_FTS_VIEW_ALL' => 'Pregledaj sve rezultate',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Prikaži sve',
    'LNK_CLOSE' => 'Zatvori',
    'LBL_MODIFY_CURRENT_SEARCH' => 'Izmjeni postojeći filter',
    'LBL_MODIFY_CURRENT_FILTER' => 'Izmjeni postojeći filter',
    'LNK_SAVED_VIEWS' => 'Opcije izgleda',
    'LNK_DELETE_ALL' => 'Izbriši sve',
    'LNK_DELETE' => 'Izbriši',
    'LNK_EDIT' => 'Uredi',
    'LNK_GET_LATEST' => 'Dohvati najnovije',
    'LNK_GET_LATEST_TOOLTIP' => 'Zamijeni sa najnovijom verzijom',
    'LNK_HELP' => 'Pomoć',
    'LNK_CREATE' => 'Kreiraj',
    'LNK_LIST_END' => 'Kraj',
    'LNK_LIST_NEXT' => 'Sljedeće',
    'LNK_LIST_PREVIOUS' => 'Prethodno',
    'LNK_LIST_RETURN' => 'Povratak na listu',
    'LNK_LIST_START' => 'Započni',
    'LNK_LOAD_SIGNED' => 'Potpiši',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Zamijeni sa potpisanim dokumentom',
    'LNK_PRINT' => 'Ispis',
    'LNK_BACKTOTOP' => 'Povratak na vrh',
    'LNK_REMOVE' => 'Ukloni',
    'LNK_RESUME' => 'Nastavi',
    'LNK_VIEW_CHANGE_LOG' => 'Pogledaj zapisnik izmjena',

    'NTC_CLICK_BACK' => 'Molim kliknite natrag u Vašem pregledniku i ispravite grešku.',
    'NTC_DATE_FORMAT' => '(yyyy-mm-dd)',
    'NTC_DATE_TIME_FORMAT' => '(yyyy-mm-dd 24:00)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Jeste li sigurni želite li izbrisati odabrani zapis(e)?',
    'NTC_TEMPLATE_IS_USED' => 'Predložak je korišten u barem jednom zapisu email marketinga. Jeste li sigurni želite li ga izbrisati?',
    'NTC_TEMPLATES_IS_USED' => 'Sljedeći predlošci korišteni su u zapisima email marketinga. Jeste li sigurni želite li ih izbrisati?\n',
    'NTC_DELETE_CONFIRMATION' => 'Jeste li sigurni želite li izbrisati ovaj zapis?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Jeste li sigurni želite li izbrisati',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Jeste li sigurni želite li izbrisati',
    'NTC_DELETE_SELECTED_RECORDS' => 'odabrani zapis(e)?',
    'NTC_LOGIN_MESSAGE' => 'Molim unesite Vaše korisničko ime i lozinku.',
    'NTC_NO_ITEMS_DISPLAY' => 'nijedan',
    'NTC_REMOVE_CONFIRMATION' => 'Jeste li sigurni želite li ukloniti ovu vezu? Samo će se veza ukloniti. Zapis se neće izbrisati.',
    'NTC_REQUIRED' => 'Ukazuje na potrebno polje',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Dobrodošli',
    'NTC_YEAR_FORMAT' => '(yyyy)',
    'LOGIN_LOGO_ERROR' => 'Please replace the SuiteCRM logos.',
    'WARN_ONLY_ADMINS' => 'Samo se administatori mogu prijaviti.',
    'WARN_UNSAVED_CHANGES' => 'You are about to leave this record without saving any changes you may have made to the record. Are you sure you want to navigate away from this record?',
    'ERROR_NO_RECORD' => 'Greška zaprimanja zapisa. Zapis je možda izbrisan ili niste autorizirani kako bi ga vidjeli',
    'WARN_BROWSER_VERSION_WARNING' => '<b>Upozorenje:</b>Vaš preglednik više nije podržan ili koristite nepodržani preglednik.<p></p>Sljedeće verzije preglednika su podržane<p></p><ul><li>Internet Explorer 10 (pogled kompatibilnosti nije podržan)<li>Firefox 32.0<li>Safari 5.1<li>Chrome 37</ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Upozorenje:</b> Vaš preglednik je u IE kompatibilnom pogledu koi nije podržan.',
    'ERROR_TYPE_NOT_VALID' => 'Greška. Ovaj tip nije važeći.',
    'ERROR_NO_BEAN' => 'Failed to get bean.',
    'LBL_DUP_MERGE' => 'Pronađi duplikate',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Upravljanje predbilježbama',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Upravljanje pretplatama za',
    'LBL_SUBSCRIBE' => 'Pretplati se',
    'LBL_UNSUBSCRIBE' => 'Odjavi pretplatu',
    // Ajax status strings
    'LBL_LOADING' => 'Učitavanje ...',
    'LBL_SEARCHING' => 'Traženje...',
    'LBL_SAVING_LAYOUT' => 'Spremanje izgelda ...',
    'LBL_SAVED_LAYOUT' => 'Izgled je spremljen.',
    'LBL_SAVED' => 'Spremljeno',
    'LBL_SAVING' => 'Spremanje',
    'LBL_FAILED' => 'Neuspjelo!',
    'LBL_DISPLAY_COLUMNS' => 'Prikaži stupce',
    'LBL_HIDE_COLUMNS' => 'Sakrij stupce',
    'LBL_SEARCH_CRITERIA' => 'Kriterij pretaživanja',
    'LBL_SAVED_VIEWS' => 'Spremljeni pregledi',
    'LBL_PROCESSING_REQUEST' => 'Procesuiranje..',
    'LBL_REQUEST_PROCESSED' => 'Učinjeno',
    'LBL_AJAX_FAILURE' => 'Ajax kvar',
    'LBL_MERGE_DUPLICATES' => 'Spoji',
    'LBL_SAVED_SEARCH_SHORTCUT' => 'Moji Filteri',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Moji Filteri',
    'LBL_SEARCH_POPULATE_ONLY' => 'Izvrši pretragu koristeći pretragu od iznad',
    'LBL_DETAILVIEW' => 'Detaljni pregled',
    'LBL_LISTVIEW' => 'Pregled liste',
    'LBL_EDITVIEW' => 'Uredi pregled',
    'LBL_SEARCHFORM' => 'Obrazac pretraživanja',
    'LBL_SAVED_SEARCH_ERROR' => 'Molim pružite ime za ovaj pregled.',
    'LBL_DISPLAY_LOG' => 'Prikaži zapisnik',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Sustav',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Istek sesije',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Vaša sesija isteći će za 2 minute. Molim spremite Vaš rad.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Vaša sesija je istekla.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "
\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Sastanak',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Poziv',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Vrijeme:',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Lokacija:',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Opis:',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Status:',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Povezano sa:',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "
\nKliknite OK za pregled ovog poziva ili kliknite Odustani za odbaciti ovu poruku.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "
\nKliknite OK za pregled ovo sastanka ili kliknite Odustani za odbaciti ovu poruku.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Događaj',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Event isn\'t set.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Location isn\'t set.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Start date isn\'t defined.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Nisu pronađeni rezultati.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'No results found... Perhaps change your search criteria and try again?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Nisu pronađeni rezultati za <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Kreiraj <item1> kao novi <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'or change your search criteria',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Trenutno nemate spremljnih zapisa. <item2> ili <item3> sada.',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS_SUBMSG' => '<item4> to learn more about the <item1> module. In order to access more information, use the user menu drop down located on the main navigation bar to access Help.',

    'LBL_CLICK_HERE' => 'Kliknite ovdje',
    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Dodaj u moje favorite:',
    'LBL_MARK_AS_FAVORITES' => 'Označi kao favorit',
    'LBL_CREATE_CONTACT' => 'Kreiraj kontakt',
    'LBL_CREATE_CASE' => 'Kreiraj slučaj',
    'LBL_CREATE_NOTE' => 'Kreiraj bilješku',
    'LBL_CREATE_OPPORTUNITY' => 'Kreiraj priliku',
    'LBL_SCHEDULE_CALL' => 'Zabilježi poziv',
    'LBL_SCHEDULE_MEETING' => 'Zakaži sastanak',
    'LBL_CREATE_TASK' => 'Kreiraj zadatak',
    'LBL_REMOVE_FROM_FAVORITES' => 'Ukloni iz mojih favorita',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Generiraj obrazac',
    'LBL_SAVE_WEB_TO_LEAD_FORM' =>'Save Web Form',
    'LBL_AVAILABLE_FIELDS'=>'Dostupna polja',
    'LBL_FIRST_FORM_COLUMN'=>'First Form Column',
    'LBL_SECOND_FORM_COLUMN'=>'Second Form Column',
    'LBL_ASSIGNED_TO_REQUIRED'=>'Missing required field: Assigned to',
    'LBL_RELATED_CAMPAIGN_REQUIRED'=>'Missing required field: Related campaign',
    'LBL_TYPE_OF_PERSON_FOR_FORM'=>'Web form to create ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC'=>'Submitting this form will create ',

    'LBL_PLEASE_SELECT' => 'Molim odaberite',
    'LBL_REDIRECT_URL' => 'Preusmjeri URL',
    'LBL_RELATED_CAMPAIGN' => 'Povezana kampanja',
    'LBL_ADD_ALL_LEAD_FIELDS' => 'Dodaj sva polja',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Reset all Fields',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Ukloni sva polja',
    'LBL_NEXT_BTN' => 'Sljedeće',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Samo se sljedeći tipovi slikovnih privitaka mogu ugraditi: JPG, PNG.',
    'LBL_TRAINING' => 'Support Forum',
    'ERR_DATABASE_CONN_DROPPED' => 'Greška izvršavanja upita. Moguće da je izgubljena veza s bazom podataka. Molim osvježite stranicu, možda ćete morati ponovo pokrenuti Vaš web server.',
    'ERR_MSSQL_DB_CONTEXT' => 'Promijenjen kontekst baze podataka u',
    'ERR_MSSQL_WARNING' => 'Upozorenje:',

    //Meta-Data framework
    'ERR_MISSING_VARDEF_NAME' => 'Upozorenje: polje [[field]] nema mapirani unos u [moduleDir] vardefs.php datoteci',
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Greška: Datoteka [[file]] nedostaje.  Nije moguće kreirati jer nije pronađena odgovarajuća HTML datoteka.',
    'ERR_CANNOT_FIND_MODULE' => 'Greška: Modul [module] ne postoji.',
    'LBL_ALT_ADDRESS' => 'Ostala adresa:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Error: There are an unequal number of arguments for the \'key\' and \'copy\' elements in the displayParams array.',
    'ERR_SMARTY_MISSING_DISPLAY_PARAMS' => 'Missing index in displayParams Array for: ',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Općenito',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filteri',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Samo moje stavke',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Naslov',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Prikaži redove',

    // MySugar status strings
    'LBL_CREATING_NEW_PAGE' => 'Kreiranje nove stranice...',
    'LBL_NEW_PAGE_FEEDBACK' => 'You have created a new page. You may add new content with the Add Dashlets menu option.',
    'LBL_DELETE_PAGE_CONFIRM' => 'Jeste li sigurni želite li izbrisati ovu stranicu?',
    'LBL_SAVING_PAGE_TITLE' => 'Spremanje naslova stranice ...',
    'LBL_RETRIEVING_PAGE' => 'Zaprimanje stranice ...',
    'LBL_MAX_DASHLETS_REACHED' => 'You have reached the maximum number of SuiteCRM Dashlets your adminstrator has set. Please remove a SuiteCRM Dashlet to add more.',
    'LBL_ADDING_DASHLET' => 'Adding SuiteCRM Dashlet ...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet Added',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Are you sure you want to remove this SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Removing SuiteCRM Dashlet ...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet removed',

    // MySugar Menu Options
    'LBL_ADD_PAGE' => 'Dodaj stranicu',
    'LBL_DELETE_PAGE' => 'Izbriši stranicu',
    'LBL_CHANGE_LAYOUT' => 'Promjeni raspored',
    'LBL_RENAME_PAGE' => 'Preimenuj stranicu',

    'LBL_LOADING_PAGE' => 'Učitavanje stranice, molim pričekajte...',

    'LBL_RELOAD_PAGE' => 'Please <a href="javascript: window.location.reload()">reload the window</a> to use this SuiteCRM Dashlet.',
    'LBL_ADD_DASHLETS' => 'Dodaj dashlete',
    'LBL_CLOSE_DASHLETS' => 'Zatvori',
    'LBL_OPTIONS' => 'Opcije',
    'LBL_NUMBER_OF_COLUMNS' => 'Odaberite broj redaka',
    'LBL_1_COLUMN' => '1 stupac',
    'LBL_2_COLUMN' => '2 stupca',
    'LBL_3_COLUMN' => '3 stupca',
    'LBL_PAGE_NAME' => 'Ime stranice',

    'LBL_SEARCH_RESULTS' => 'Pretraga rezultata',
    'LBL_SEARCH_MODULES' => 'Moduli',
    'LBL_SEARCH_CHARTS' => 'Grafikoni',
    'LBL_SEARCH_REPORT_CHARTS' => 'Dijagrami izvješća',
    'LBL_SEARCH_TOOLS' => 'Alati',
    'LBL_SEARCH_HELP_TITLE' => 'Tipovi pretraživanja',
    'LBL_SEARCH_HELP_CLOSE_TOOLTIP' => 'Zatvori',
    'LBL_SEARCH_RESULTS_FOUND' => 'Pronađeni rezutati pretraživanja',
    'LBL_SEARCH_RESULTS_TIME' => 'ms.',
    'ERR_BLANK_PAGE_NAME' => 'Molim unesite ime stranice',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Nema slike',

    'LBL_MODULE' => 'Modul',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Kopiraj adresu sa lijeve strane:',
    'LBL_SAVE_AND_CONTINUE' => 'Spremi i nastavi',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Kontole višestrukog odabira</strong></p><ul><li>Kliknite na vrijednosti za odabir atributa.</li><li>Ctrl-click&nbsp;to&nbsp;višestruki odabir. Mac korisnici koriste CMD-click.</li><li>Za odabir svih vrijednosti između dva atributa,&nbsp; kliknite prvo vrijednost&nbsp;a zatim shift-klik zadnuu vrijednost.</li></ul><p><strong>Opcije naprednog pretraživanja i izgleda</strong><br><br>Koristeći <b>Spremljeno pretraživanje i izgled</b> opciju, možete spremiti set parametara pretraživanja i/ili prilagođenu listu izgleda kako bi ubuduće brzo dobili željene rezultate pretraživanja. Možete spremiti neograničen broj prilagođenih pretraživanja i izgleda. Sva spremljna preraživanja prikazuju se prema imenu u listi spremljenih pretraživanja sa zadnje učitanjim spremljenim pretraživanjem koje se pojavljuje na vrhu liste.<br><br>Za prilagoditi listu pregleda, koristite kućice Sakrij stupce i Prikaži stupce kako bi odabrali koja polja želite da se prikazuju u rezultatima pretraživanja. Na primjer, možete pregledati ili sakriti detalje poput imena zapisa, dodijeljenog korisnika i dodijeljenog tima u rezultatima pretraživanja. Za dodati stupac u pregled liste, odaberite polje iz liste Sakrij Stupce i koristite lijevu strelicu za pomaknuti ga na listu Prikaži stupce. Za maknuti stupac iz pregleda listi, odaberite ga iz liste Prikaži stupce i koristite desnu strelicu kako bi pomaknuli u listu Sakrij Stupce .<br><br>Ako spremite postavke izgleda, moći ćete ih učitati bilo kada za pregled rezultata pretraživanja u prilagođenom izgledu.<br><br>Za spremiti i ažurirati pretraživanje i/ili izgled:<ol><li>Unesite ime za rezulate pretraživanja u <b>SPremi ovo pretraživanje kao</b> polje i kliknite <b>Spremi</b>.Ime se sad prikazuje u listi spremlejnih pretraživanja uz <b>Očisti</b> gumb.</li><li>Za pregledati spremljeno pretraživanje, odaberite ga iz liste spremljenih pretraživanja. Rezultati pretraživanja prikazani su na pregledu liste.</li><li>Za ažurirati svojstva spremljenog pretraživanja, odaberite spremljeno pretraživanje s liste,unesite nove kriterije pretraživanja i/ili opcija izgleda u području naprednog pretraživanja i klikinite  <b>Ažuriraj</b> odmah uz <b>Izmijeni trenutno poretraživanje</b>.</li><li>Za izbrisati sprevljeno pretraživanje, odaberite ga iz liste spremljenih pretražinvaja, kliknite <b>Izbriši</b> odmah uz <b>Izmijeni trenutni pretraživanje</b>, i zatim kliknite <b>OK</b> za potvrdu brisanja.</li></ol><p><strong>Savjeti</strong><br><br>Korištenjem %  kao zamjenskog operatora možete proširit pretraživanje.  Na primjer, umjesto pretraživanja samo rezultata koji prikazuju samo "Jabuke" Možete izmijeniti pretraživanje u "Jabuke%" koje će prikazati sve rezultate koji počinju sa riječju Jabuke, ali mogu sadržavati i ostale znakove.</p> \'% a\'',

    //resource management
    'ERR_QUERY_LIMIT' => 'Greška: Query limit of $limit reached for $module module.',
    'ERROR_NOTIFY_OVERRIDE' => 'Greška: ResourceObserver->notify() needs to be overridden.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Greška: Unable to create monitor because metadata file is empty or file does not exist.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Greška: There is no monitor configured for requested name',
    'ERR_UNDEFINED_METRIC' => 'Greška: Unable to set value for undefined metric',
    'ERR_STORE_FILE_MISSING' => 'Greška: Unable to find Store implementation file',

    'LBL_MONITOR_ID' => 'Monitor Id',
    'LBL_USER_ID' => 'Id korisnika',
    'LBL_MODULE_NAME' => 'Naziv modula',
    'LBL_ITEM_ID' => 'Id stavke',
    'LBL_ITEM_SUMMARY' => 'Rezime stavki',
    'LBL_ACTION' => 'Radnja',
    'LBL_SESSION_ID' => 'Id sesije',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack created for user id {0}',
    'LBL_VISIBLE' => 'Zapis vidljiv',
    'LBL_DATE_LAST_ACTION' => 'Datum posljednje radnje',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'nije prije',
    'MSG_IS_MORE_THAN' => 'je više od',
    'MSG_IS_LESS_THAN' => 'je manje od',
    'MSG_SHOULD_BE' => 'trebao bi biti',
    'MSG_OR_GREATER' => 'ili veći',

    'LBL_PORTAL_WELCOME_TITLE' => 'Welcome to SuiteCRM Portal',
    'LBL_PORTAL_WELCOME_INFO' => 'SuiteCRM Portal is a framework which provides real-time view of cases, bugs & newsletters etc to customers. This is an external facing interface to SuiteCRM that can be deployed within any website.',
    'LBL_LIST' => 'Lista',
    'LBL_CREATE_BUG' => 'Kreiraj bug',
    'LBL_NO_RECORDS_FOUND' => '- 0 zapisa pronađeno -',

    'DATA_TYPE_DUE' => 'Dospijeće:',
    'DATA_TYPE_START' => 'Početak:',
    'DATA_TYPE_SENT' => 'Poslano:',
    'DATA_TYPE_MODIFIED' => 'Izmijenjeno:',

    //jchi at 608/06/2008 10913am china time for the bug 12253.
    'LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT' => 'Brojati',
    //jchi #19433
    'LBL_OBJECT_IMAGE' => 'object image',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Odaberi datum',

    'LBL_VALIDATE_RANGE' => 'nije u važećem rasponu',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Molim odaberite raspon početnog i završnog datuma',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Molim odaberite unose početnih i završnih raspona',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Sve',

    'LBL_OPERATOR_IN_TEXT' => 'je jedan od sljedećih:',
    'LBL_OPERATOR_NOT_IN_TEXT' => 'nije jedan od sljedećih:',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Greška: The Array count of the bean parameter does not match the Array count of the results.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Greška: Missing mapping entry for module.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Greška: Unable to retrieve data for {0} Connector.  The service may currently be inaccessible or the configuration settings may be invalid.  Connector error message: ({1}).',
    'LBL_MERGE_CONNECTORS' => 'Dohvati podatke',
    'LBL_MERGE_CONNECTORS_BUTTON_KEY' => '[D]',
    'LBL_REMOVE_MODULE_ENTRY' => 'Are you sure you want to disable connector integration for this module?',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'Za optimalno iskustvo koristeći IIS/FastCGI sapi, postavite fastcgi.logging na 0 u vašoj php.ini datoteci.',

    //cma
    'LBL_MASSUPDATE_DELETE_GLOBAL_TEAM' => 'Globalni tim ne može se izbrisati.',
    'LBL_MASSUPDATE_DELETE_USER_EXISTS' => 'Ovaj privatni tim [{0}] ne može biti izbrisan dok korisnik [{1}] nije izbrisan.',

    //martin #25548
    'LBL_NO_FLASH_PLAYER' => 'Ili je vaš Adobe Flash isključen ili koristite stariju verziju Adobe Flash Player. Za dohvaćanje najnovije verzije, <a href="http://www.adobe.com/go/getflashplayer/">kliknite ovje</a>.',
    //Collection Field
    'LBL_COLLECTION_NAME' => 'Ime',
    'LBL_COLLECTION_PRIMARY' => 'Primarno',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Isprazni potrebno polje',
    'LBL_COLLECTION_EXACT' => 'Točno',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Dodijeljeno',
    'LBL_DESCRIPTION' => 'Opis',

    'LBL_YESTERDAY' => 'jučer',
    'LBL_TODAY' => 'danas',
    'LBL_TOMORROW' => 'sutra',
    'LBL_NEXT_WEEK' => 'sljedeća sedmica',
    'LBL_NEXT_MONDAY' => 'sljedeći ponedjeljak',
    'LBL_NEXT_FRIDAY' => 'sljedeći petak',
    'LBL_TWO_WEEKS' => 'dvije sedmice',
    'LBL_NEXT_MONTH' => 'sljedeći mjesec',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'prvi dan sljedećeg mjeseca',
    'LBL_THREE_MONTHS' => 'tri mjeseca',
    'LBL_SIXMONTHS' => 'šest mjeseci',
    'LBL_NEXT_YEAR' => 'sljedeće godine',
    'LBL_FILTERED' => 'Filtrirano',

    //Datetimecombo fields
    'LBL_HOURS' => 'sati',
    'LBL_MINUTES' => 'minuta',
    'LBL_MERIDIEM' => 'Podne',
    'LBL_DATE' => 'datum',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Automatsko osvježivanje',

    'LBL_DURATION_DAY' => 'dan',
    'LBL_DURATION_HOUR' => 'sat',
    'LBL_DURATION_MINUTE' => 'minuta',
    'LBL_DURATION_DAYS' => 'dana',
    'LBL_DURATION_HOURS' => 'sati',
    'LBL_DURATION_MINUTES' => 'minuta',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Odaberite mjesec',
    'LBL_ENTER_YEAR' => 'Unesite godinu',
    'LBL_ENTER_VALID_YEAR' => 'Molim unesite važeću godinu',

    //SugarFieldPhone labels
    'LBL_INVALID_USA_PHONE_FORMAT' => 'Molim unesite numerički telefonski broj, uključujući pozivni broj.',

    //File write error label
    'ERR_FILE_WRITE' => 'Greška: Could not write file {0}.  Please check system and web server permissions.',
    'ERR_FILE_NOT_FOUND' => 'Greška: Could not load file {0}.  Please check system and web server permissions.',

    'LBL_AND' => 'i',
    'LBL_BEFORE' => 'Prije',

    // File fields
    'LBL_UPLOAD_FROM_COMPUTER' => 'Uploadajte sa Vašeg računala',
    'LBL_SEARCH_EXTERNAL_API' => 'Datoteka na vanjskom izvoru',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Sigurnost',
    'LBL_SHARE_PRIVATE' => 'Privatno',
    'LBL_SHARE_COMPANY' => 'Kompanija',
    'LBL_SHARE_LINKABLE' => 'Povezivo',
    'LBL_SHARE_PUBLIC' => 'Javno',

    // Web Services REST RSS
    'LBL_RSS_FEED' => 'RSS kanali',
    'LBL_RSS_RECORDS_FOUND' => 'zapis(a) pronađeno',
    'ERR_RSS_INVALID_INPUT' => 'RSS is not a valid input_type',
    'ERR_RSS_INVALID_RESPONSE' => 'RSS is not a valid response_type for this method',

    //External API Error Messages
    'ERR_GOOGLE_API_415' => 'Google Docs ne podržava format datoteke koju ste dostavili.',

    'LBL_EMPTY' => 'Isprazni',
    'LBL_IS_EMPTY' => 'Prazno je',
    'LBL_IS_NOT_EMPTY' => 'Nije prazno',
    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"This is a sample import file which provides an example of the expected contents of a file that is ready for import."
"The file is a comma-delimited .csv file, using double-quotes as the field qualifier."

"The header row is the top-most row in the file and contains the field labels as you would see them in the application."
"These labels are used for mapping the data in the file to the fields in the application."

"Notes: The database names could also be used in the header row. This is useful when you are using phpMyAdmin or another database tool to provide an exported list of data to import."
"The column order is not critical as the import process matches the data to the appropriate fields based on the header row."


"To use this file as a template, do the following:"
"1. Remove the sample rows of data"
"2. Remove the help text that you are reading right now"
"3. Input your own data into the appropriate rows and columns"
"4. Save the file to a known location on your system"
"5. Click on the Import option from the Actions menu in the application and choose the file to upload"
   ',
    //define labels to be used for overriding local values during import/export
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Dodijeljeno',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Dodijeljeni korisnik',
    'LBL_EXPORT_REPORTS_TO_ID' => 'Reports To ID',
    'LBL_EXPORT_FULL_NAME' => 'Puno ime',
    'LBL_EXPORT_TEAM_ID' => 'ID tima',
    'LBL_EXPORT_TEAM_NAME' => 'Timovi',
    'LBL_EXPORT_TEAM_SET_ID' => 'Team Set ID',

    'LBL_QUICKEDIT_NODEFS_NAVIGATION' => 'Navigiranje...',

    'LBL_PENDING_NOTIFICATIONS' => 'Notifikacije',
    'LBL_NOTIFICATIONS_NONE' => 'No Current Notifications',
    'LBL_ALT_ADD_TEAM_ROW' => 'Dodaj novi timski red',
    'LBL_ALT_REMOVE_TEAM_ROW' => 'Ukloni tim',
    'LBL_ALT_SPOT_SEARCH' => 'Spot Search',
    'LBL_ALT_SORT_DESC' => 'Sortirano silazno',
    'LBL_ALT_SORT_ASC' => 'Sortirano uzlazno',
    'LBL_ALT_SORT' => 'Sortiraj',
    'LBL_ALT_SHOW_OPTIONS' => 'Prikaži opcije',
    'LBL_ALT_HIDE_OPTIONS' => 'Sakrij opcije',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Pomaknite odabrani unos na listi nalijevo.',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Pomaknite odabrani unos na listi nadesno.',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Pomaknite odabrani unos gore na prikazanom poretku liste.',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Pomaknite odabrani unos dolje na prikazanom poretku liste',
    'LBL_ALT_INFO' => 'Informacija',
    'MSG_DUPLICATE' => 'The {0} record you are about to create might be a duplicate of an {0} record that already exists. {1} records containing similar names are listed below.<br>Click Create {1} to continue creating this new {0}, or select an existing {0} listed below.',
    'MSG_SHOW_DUPLICATES' => 'The {0} record you are about to create might be a duplicate of a {0} record that already exists. {1} records containing similar names are listed below.  Click Save to continue creating this new {0}, or click Cancel to return to the module without creating the {0}.',
    'LBL_EMAIL_TITLE' => 'adresa e-pošte',
    'LBL_EMAIL_OPT_TITLE' => 'adresa odjavne e-pošte',
    'LBL_EMAIL_INV_TITLE' => 'pograšna adresa e-pošte',
    'LBL_EMAIL_PRIM_TITLE' => 'adresa primarne e-pošte',
    'LBL_SELECT_ALL_TITLE' => 'Odaberi sve',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Odaberi ovaj red',
    'LBL_TEAM_SELECTED_TITLE' => 'Tim odabran',
    'LBL_TEAM_SELECT_AS_PRIM_TITLE' => 'Odaberi za učiniti ovaj tim primarnim',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'GREŠKA: Dogodila se greška priliko uploada. Kod greške: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'GREŠKA: Dogodila se greška priliko uploada. Kod greške: {0} - {1}. Maksimalna veličina uploada je {2}',
    'UPLOAD_ERROR_HOME_TEXT' => 'GREŠKA: Dogodila se greška priliko uploada. Molim kontaktiraje administratora za pomoć.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Veličina uploada ({0} bajtova) prelati dopušteni maksimum: {1} bajtova',
    'UPLOAD_REQUEST_ERROR' => 'Greška. Molim osvježite vašu stranicu i ponovno pokušajte.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => 'Uredi',
    'LBL_EDIT_BUTTON_TITLE' => 'Uredi',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Duplikat',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Duplikat',
    'LBL_DELETE_BUTTON_KEY' => 'd',
    'LBL_DELETE_BUTTON_LABEL' => 'Izbriši',
    'LBL_DELETE_BUTTON_TITLE' => 'Izbriši',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'Bulk Action', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Radnja', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'Spremi',
    'LBL_SAVE_BUTTON_TITLE' => 'Spremi',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'Odustani',
    'LBL_CANCEL_BUTTON_TITLE' => 'Odustani',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',
    'LBL_GLOBAL_SEARCH_LNK_KEY' => '0',
    'LBL_KEYBOARD_SHORTCUTS_HELP_TITLE' => 'Kratice na tastaturi',
    'LBL_KEYBOARD_SHORTCUTS_HELP' => '<p><strong>Form Functionality - Alt+</strong><br/> I = ed<b>I</b>t (detailview)<br/> U = d<b>U</b>plicate (detailview)<br/> D = <b>D</b>elete (detailview)<br/> A = s<b>A</b>ve (editview)<br/> L = cance<b>L</b> (editview) <br/><br/></p><p><strong>Search and Navigation  - Alt+</strong><br/> 7 = first input on Edit form<br/> 8 = Advanced Search link<br/> 9 = First Search Form input<br/> 0 = Unified search input<br></p>',

    'ERR_CONNECTOR_NOT_ARRAY' => 'connector array in {0} been defined incorrectly or is empty and could not be used.',
    'ERR_SUHOSIN' => 'Upload stream is blocked by Suhosin, please add &quot;upload&quot; to suhosin.executor.include.whitelist (See suitecrm.log for more information)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Pogrešan odaziv servera.',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Ponuda',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Prodajna cijena',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Ručno',
        '5' => 'Svakih 5 minuta',
        '15' => 'Svakih 15 minuta',
        '30' => 'Svakih 30 minuta',
        '60' => 'Svaki sat',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'A reminder is empty or incorrect.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Reminder is not set for either a popup or email.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'No invitees for reminder.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Reminder doesn\'t include any invitees, do you want to remove the reminder?',
    'LBL_DELETE_REMINDER' => 'Delete Reminder',
    'LBL_OK' => 'Ok',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Choose columns',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Save changes',
    'LBL_DISPLAYED' => 'Displayed',
    'LBL_HIDDEN' => 'Sakriveno',
    'ERR_EMPTY_COLUMNS_LIST' => 'At least, one element required',

    'LBL_FILTER_HEADER_TITLE' => 'Filtriraj',
    'LBL_SEARCH_HEADER_TITLE' => 'Filtriraj',

    'LBL_CATEGORY' => 'Kategorija',
    'LBL_LIST_CATEGORY' => 'Kategorija',

);

$app_list_strings['moduleList']['Library'] = 'Knjižnica';
$app_list_strings['library_type'] = array('Books' => 'Knjiga', 'Music' => 'Glazba', 'DVD' => 'DVD', 'Magazines' => 'Časopisi');
$app_list_strings['moduleList']['EmailAddresses'] = 'Adresa e-pošte';
$app_list_strings['project_priority_default'] = 'Srednji';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Visoki',
    'Medium' => 'Srednji',
    'Low' => 'Niski',
);

$app_list_strings['kbdocument_status_dom'] = array(
    'Draft' => 'Skica',
    'Expired' => 'Istekao',
    'In Review' => 'U pregledu',
    'Published' => 'Objavljeno',
);

$app_list_strings['kbadmin_actions_dom'] =
    array(
        '' => '--Admin Actions--',
        'Create New Tag' => 'Kreiraj novu oznaku',
        'Delete Tag' => 'Izbriši oznaku',
        'Rename Tag' => 'Preimenuj oznaku',
        'Move Selected Articles' => 'Premjesti odabrane članke',
        'Apply Tags On Articles' => 'Dodaj oznake člancima',
        'Delete Selected Articles' => 'Izbriši odabrane članke',
    );

$app_list_strings['kbdocument_attachment_option_dom'] =
    array(
        '' => '',
        'some' => 'Ima privitke',
        'none' => 'Nijedan',
        'mime' => 'Odredi Mime tip',
        'name' => 'Odredi ime',
    );

$app_list_strings['moduleList']['KBDocuments'] = 'Baza znanja';
$app_strings['LBL_CREATE_KB_DOCUMENT'] = 'Create Article';
$app_list_strings['kbdocument_viewing_frequency_dom'] =
    array(
        '' => '',
        'Top_5' => 'Top 5',
        'Top_10' => 'Top 10',
        'Top_20' => 'Top 20',
        'Bot_5' => 'Donjih 5',
        'Bot_10' => 'Donjih 10',
        'Bot_20' => 'Donjih 20',
    );

$app_list_strings['kbdocument_canned_search'] =
    array(
        'all' => 'Sve',
        'added' => 'Dodano zadnjih 30 dana',
        'pending' => 'Čeka moje odobrenje',
        'updated' => 'Ažurirano zadnjih 30 dana',
        'faqs' => 'Često postavljena pitanja',
    );
$app_list_strings['kbdocument_date_filter_options'] =
    array(
        '' => '',
        'on' => 'Na',
        'before' => 'Prije',
        'after' => 'Poslije',
        'between_dates' => 'Je između',
        'last_7_days' => 'Zadnjih 7 dana',
        'next_7_days' => 'Sljedećih 7 dana',
        'last_month' => 'Prošli mjesec',
        'this_month' => 'Ovaj mjesec',
        'next_month' => 'Sljedeći mjesec',
        'last_30_days' => 'Zadnjih 30 dana',
        'next_30_days' => 'Sljedećih 30 dana',
        'last_year' => 'Prošle godine',
        'this_year' => 'Ove godine',
        'next_year' => 'Sljedeće godine',
        'isnull' => 'Je ništavan',
    );

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ABU DHABI',
    'ADEN' => 'ADEN',
    'AFGHANISTAN' => 'AFGHANISTAN',
    'ALBANIA' => 'ALBANIA',
    'ALGERIA' => 'ALGERIA',
    'AMERICAN SAMOA' => 'AMERICAN SAMOA',
    'ANDORRA' => 'ANDORRA',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ANTARCTICA',
    'ANTIGUA' => 'ANTIGUA',
    'ARGENTINA' => 'ARGENTINA',
    'ARMENIA' => 'ARMENIA',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'AUSTRALIA',
    'AUSTRIA' => 'AUSTRIA',
    'AZERBAIJAN' => 'AZERBAIJAN',
    'BAHAMAS' => 'BAHAMAS',
    'BAHRAIN' => 'BAHRAIN',
    'BANGLADESH' => 'BANGLADESH',
    'BARBADOS' => 'BARBADOS',
    'BELARUS' => 'BELARUS',
    'BELGIUM' => 'BELGIUM',
    'BELIZE' => 'BELIZE',
    'BENIN' => 'BENIN',
    'BERMUDA' => 'BERMUDA',
    'BHUTAN' => 'BHUTAN',
    'BOLIVIA' => 'BOLIVIA',
    'BOSNIA' => 'BOSNIA',
    'BOTSWANA' => 'BOTSWANA',
    'BOUVET ISLAND' => 'BOUVET ISLAND',
    'BRAZIL' => 'BRAZIL',
    'BRITISH ANTARCTICA TERRITORY' => 'BRITISH ANTARCTICA TERRITORY',
    'BRITISH INDIAN OCEAN TERRITORY' => 'BRITISH INDIAN OCEAN TERRITORY',
    'BRITISH VIRGIN ISLANDS' => 'BRITISH VIRGIN ISLANDS',
    'BRITISH WEST INDIES' => 'BRITISH WEST INDIES',
    'BRUNEI' => 'BRUNEI',
    'BULGARIA' => 'BULGARIA',
    'BURKINA FASO' => 'BURKINA FASO',
    'BURUNDI' => 'BURUNDI',
    'CAMBODIA' => 'CAMBODIA',
    'CAMEROON' => 'CAMEROON',
    'CANADA' => 'CANADA',
    'CANAL ZONE' => 'CANAL ZONE',
    'CANARY ISLAND' => 'CANARY ISLAND',
    'CAPE VERDI ISLANDS' => 'CAPE VERDI ISLANDS',
    'CAYMAN ISLANDS' => 'CAYMAN ISLANDS',

    'CHAD' => 'CHAD',
    'CHANNEL ISLAND UK' => 'CHANNEL ISLAND UK',
    'CHILE' => 'CHILE',
    'CHINA' => 'CHINA',
    'CHRISTMAS ISLAND' => 'CHRISTMAS ISLAND',
    'COCOS (KEELING) ISLAND' => 'COCOS (KEELING) ISLAND',
    'COLOMBIA' => 'COLOMBIA',
    'COMORO ISLANDS' => 'COMORO ISLANDS',
    'CONGO' => 'CONGO',
    'CONGO KINSHASA' => 'CONGO KINSHASA',
    'COOK ISLANDS' => 'COOK ISLANDS',
    'COSTA RICA' => 'COSTA RICA',
    'CROATIA' => 'CROATIA',
    'CUBA' => 'CUBA',
    'CURACAO' => 'CURACAO',
    'CYPRUS' => 'CYPRUS',
    'CZECH REPUBLIC' => 'CZECH REPUBLIC',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'DENMARK',
    'DJIBOUTI' => 'DJIBOUTI',
    'DOMINICA' => 'DOMINICA',
    'DOMINICAN REPUBLIC' => 'DOMINICAN REPUBLIC',
    'DUBAI' => 'DUBAI',
    'ECUADOR' => 'ECUADOR',
    'EGYPT' => 'EGYPT',
    'EL SALVADOR' => 'EL SALVADOR',
    'EQUATORIAL GUINEA' => 'EQUATORIAL GUINEA',
    'ESTONIA' => 'ESTONIA',
    'ETHIOPIA' => 'ETHIOPIA',
    'FAEROE ISLANDS' => 'FAEROE ISLANDS',
    'FALKLAND ISLANDS' => 'FALKLAND ISLANDS',
    'FIJI' => 'FIJI',
    'FINLAND' => 'FINLAND',
    'FRANCE' => 'FRANCE',
    'FRENCH GUIANA' => 'FRENCH GUIANA',
    'FRENCH POLYNESIA' => 'FRENCH POLYNESIA',
    'GABON' => 'GABON',
    'GAMBIA' => 'GAMBIA',
    'GEORGIA' => 'GEORGIA',
    'GERMANY' => 'GERMANY',
    'GHANA' => 'GHANA',
    'GIBRALTAR' => 'GIBRALTAR',
    'GREECE' => 'GREECE',
    'GREENLAND' => 'GREENLAND',
    'GUADELOUPE' => 'GUADELOUPE',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'GUATEMALA',
    'GUINEA' => 'GUINEA',
    'GUYANA' => 'GUYANA',
    'HAITI' => 'HAITI',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONG KONG',
    'HUNGARY' => 'HUNGARY',
    'ICELAND' => 'ICELAND',
    'IFNI' => 'IFNI',
    'INDIA' => 'INDIA',
    'INDONESIA' => 'INDONESIA',
    'IRAN' => 'IRAN',
    'IRAQ' => 'IRAQ',
    'IRELAND' => 'IRELAND',
    'ISRAEL' => 'ISRAEL',
    'ITALY' => 'ITALY',
    'IVORY COAST' => 'IVORY COAST',
    'JAMAICA' => 'JAMAICA',
    'JAPAN' => 'JAPAN',
    'JORDAN' => 'JORDAN',
    'KAZAKHSTAN' => 'KAZAKHSTAN',
    'KENYA' => 'KENYA',
    'KOREA' => 'KOREA',
    'KOREA, SOUTH' => 'KOREA, SOUTH',
    'KUWAIT' => 'KUWAIT',
    'KYRGYZSTAN' => 'KYRGYZSTAN',
    'LAOS' => 'LAOS',
    'LATVIA' => 'LATVIA',
    'LEBANON' => 'LEBANON',
    'LEEWARD ISLANDS' => 'LEEWARD ISLANDS',
    'LESOTHO' => 'LESOTHO',
    'LIBYA' => 'LIBYA',
    'LIECHTENSTEIN' => 'LIECHTENSTEIN',
    'LITHUANIA' => 'LITHUANIA',
    'LUXEMBOURG' => 'LUXEMBOURG',
    'MACAO' => 'MACAO',
    'MACEDONIA' => 'MACEDONIA',
    'MADAGASCAR' => 'MADAGASCAR',
    'MALAWI' => 'MALAWI',
    'MALAYSIA' => 'MALAYSIA',
    'MALDIVES' => 'MALDIVES',
    'MALI' => 'MALI',
    'MALTA' => 'MALTA',
    'MARTINIQUE' => 'MARTINIQUE',
    'MAURITANIA' => 'MAURITANIA',
    'MAURITIUS' => 'MAURITIUS',
    'MELANESIA' => 'MELANESIA',
    'MEXICO' => 'MEXICO',
    'MOLDOVIA' => 'MOLDOVIA',
    'MONACO' => 'MONACO',
    'MONGOLIA' => 'MONGOLIA',
    'MOROCCO' => 'MOROCCO',
    'MOZAMBIQUE' => 'MOZAMBIQUE',
    'MYANAMAR' => 'MYANAMAR',
    'NAMIBIA' => 'NAMIBIA',
    'NEPAL' => 'NEPAL',
    'NETHERLANDS' => 'NETHERLANDS',
    'NETHERLANDS ANTILLES' => 'NETHERLANDS ANTILLES',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'NETHERLANDS ANTILLES NEUTRAL ZONE',
    'NEW CALADONIA' => 'NEW CALADONIA',
    'NEW HEBRIDES' => 'NEW HEBRIDES',
    'NEW ZEALAND' => 'NEW ZEALAND',
    'NICARAGUA' => 'NICARAGUA',
    'NIGER' => 'NIGER',
    'NIGERIA' => 'NIGERIA',
    'NORFOLK ISLAND' => 'NORFOLK ISLAND',
    'NORWAY' => 'NORWAY',
    'OMAN' => 'OMAN',
    'OTHER' => 'OTHER',
    'PACIFIC ISLAND' => 'PACIFIC ISLAND',
    'PAKISTAN' => 'PAKISTAN',
    'PANAMA' => 'PANAMA',
    'PAPUA NEW GUINEA' => 'PAPUA NEW GUINEA',
    'PARAGUAY' => 'PARAGUAY',
    'PERU' => 'PERU',
    'PHILIPPINES' => 'PHILIPPINES',
    'POLAND' => 'POLAND',
    'PORTUGAL' => 'PORTUGAL',
    'PORTUGUESE TIMOR' => 'EAST TIMOR',
    'PUERTO RICO' => 'PUERTO RICO',
    'QATAR' => 'QATAR',
    'REPUBLIC OF BELARUS' => 'REPUBLIC OF BELARUS',
    'REPUBLIC OF SOUTH AFRICA' => 'REPUBLIC OF SOUTH AFRICA',
    'REUNION' => 'REUNION',
    'ROMANIA' => 'ROMANIA',
    'RUSSIA' => 'RUSSIA',
    'RWANDA' => 'RWANDA',
    'RYUKYU ISLANDS' => 'RYUKYU ISLANDS',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAN MARINO',
    'SAUDI ARABIA' => 'SAUDI ARABIA',
    'SENEGAL' => 'SENEGAL',
    'SERBIA' => 'SERBIA',
    'SEYCHELLES' => 'SEYCHELLES',
    'SIERRA LEONE' => 'SIERRA LEONE',
    'SINGAPORE' => 'SINGAPORE',
    'SLOVAKIA' => 'SLOVAKIA',
    'SLOVENIA' => 'SLOVENIA',
    'SOMALILIAND' => 'SOMALILIAND',
    'SOUTH AFRICA' => 'SOUTH AFRICA',
    'SOUTH YEMEN' => 'SOUTH YEMEN',
    'SPAIN' => 'SPAIN',
    'SPANISH SAHARA' => 'SPANISH SAHARA',
    'SRI LANKA' => 'SRI LANKA',
    'ST. KITTS AND NEVIS' => 'ST. KITTS AND NEVIS',
    'ST. LUCIA' => 'ST. LUCIA',
    'SUDAN' => 'SUDAN',
    'SURINAM' => 'SURINAM',
    'SW AFRICA' => 'SW AFRICA',
    'SWAZILAND' => 'SWAZILAND',
    'SWEDEN' => 'SWEDEN',
    'SWITZERLAND' => 'SWITZERLAND',
    'SYRIA' => 'SYRIA',
    'TAIWAN' => 'TAIWAN',
    'TAJIKISTAN' => 'TAJIKISTAN',
    'TANZANIA' => 'TANZANIA',
    'THAILAND' => 'THAILAND',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRINIDAD',
    'TUNISIA' => 'TUNISIA',
    'TURKEY' => 'TURKEY',
    'UGANDA' => 'UGANDA',
    'UKRAINE' => 'UKRAINE',
    'UNITED ARAB EMIRATES' => 'UNITED ARAB EMIRATES',
    'UNITED KINGDOM' => 'UNITED KINGDOM',

    'URUGUAY' => 'URUGUAY',
    'US PACIFIC ISLAND' => 'US PACIFIC ISLAND',
    'US VIRGIN ISLANDS' => 'US VIRGIN ISLANDS',
    'USA' => 'USA',
    'UZBEKISTAN' => 'UZBEKISTAN',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'VATICAN CITY',
    'VENEZUELA' => 'VENEZUELA',
    'VIETNAM' => 'VIETNAM',
    'WAKE ISLAND' => 'WAKE ISLAND',
    'WEST INDIES' => 'WEST INDIES',
    'WESTERN SAHARA' => 'WESTERN SAHARA',
    'YEMEN' => 'YEMEN',
    'ZAIRE' => 'ZAIRE',
    'ZAMBIA' => 'ZAMBIA',
    'ZIMBABWE' => 'ZIMBABWE',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Taiwan and Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (MS Cyrillic)',
    'CP1252' => 'CP1252 (MS Western European & US)',
    'EUC-CN' => 'EUC-CN (Simplified Chinese GB2312)',
    'EUC-JP' => 'EUC-JP (Unix Japanese)',
    'EUC-KR' => 'EUC-KR (Korean)',
    'EUC-TW' => 'EUC-TW (Taiwanese)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japanese)',
    'ISO-2022-KR' => 'ISO-2022-KR (Korean)',
    'ISO-8859-1' => 'ISO-8859-1 (Western European and US)',
    'ISO-8859-2' => 'ISO-8859-2 (Central and Eastern European)',
    'ISO-8859-3' => 'ISO-8859-3 (Latin 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Latin 4)',
    'ISO-8859-5' => 'ISO-8859-5 (Cyrillic)',
    'ISO-8859-6' => 'ISO-8859-6 (Arabic)',
    'ISO-8859-7' => 'ISO-8859-7 (Greek)',
    'ISO-8859-8' => 'ISO-8859-8 (Hebrew)',
    'ISO-8859-9' => 'ISO-8859-9 (Latin 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latin 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latin 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latin 9)',
    'KOI8-R' => 'KOI8-R (Cyrillic Russian)',
    'KOI8-U' => 'KOI8-U (Cyrillic Ukranian)',
    'SJIS' => 'SJIS (MS Japanese)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Africa/Algiers',
    'Africa/Luanda' => 'Africa/Luanda',
    'Africa/Porto-Novo' => 'Africa/Porto-Novo',
    'Africa/Gaborone' => 'Africa/Gaborone',
    'Africa/Ouagadougou' => 'Africa/Ouagadougou',
    'Africa/Bujumbura' => 'Africa/Bujumbura',
    'Africa/Douala' => 'Africa/Douala',
    'Atlantic/Cape_Verde' => 'Atlantic/Cape Verde',
    'Africa/Bangui' => 'Africa/Bangui',
    'Africa/Ndjamena' => 'Africa/Ndjamena',
    'Indian/Comoro' => 'Indian/Comoro',
    'Africa/Kinshasa' => 'Africa/Kinshasa',
    'Africa/Lubumbashi' => 'Africa/Lubumbashi',
    'Africa/Brazzaville' => 'Africa/Brazzaville',
    'Africa/Abidjan' => 'Africa/Abidjan',
    'Africa/Djibouti' => 'Africa/Djibouti',
    'Africa/Cairo' => 'Africa/Cairo',
    'Africa/Malabo' => 'Africa/Malabo',
    'Africa/Asmera' => 'Africa/Asmera',
    'Africa/Addis_Ababa' => 'Africa/Addis Ababa',
    'Africa/Libreville' => 'Africa/Libreville',
    'Africa/Banjul' => 'Africa/Banjul',
    'Africa/Accra' => 'Africa/Accra',
    'Africa/Conakry' => 'Africa/Conakry',
    'Africa/Bissau' => 'Africa/Bissau',
    'Africa/Nairobi' => 'Africa/Nairobi',
    'Africa/Maseru' => 'Africa/Maseru',
    'Africa/Monrovia' => 'Africa/Monrovia',
    'Africa/Tripoli' => 'Africa/Tripoli',
    'Indian/Antananarivo' => 'Indian/Antananarivo',
    'Africa/Blantyre' => 'Africa/Blantyre',
    'Africa/Bamako' => 'Africa/Bamako',
    'Africa/Nouakchott' => 'Africa/Nouakchott',
    'Indian/Mauritius' => 'Indian/Mauritius',
    'Indian/Mayotte' => 'Indian/Mayotte',
    'Africa/Casablanca' => 'Africa/Casablanca',
    'Africa/El_Aaiun' => 'Africa/El Aaiun',
    'Africa/Maputo' => 'Africa/Maputo',
    'Africa/Windhoek' => 'Africa/Windhoek',
    'Africa/Niamey' => 'Africa/Niamey',
    'Africa/Lagos' => 'Africa/Lagos',
    'Indian/Reunion' => 'Indian/Reunion',
    'Africa/Kigali' => 'Africa/Kigali',
    'Atlantic/St_Helena' => 'Atlantic/St. Helena',
    'Africa/Sao_Tome' => 'Africa/Sao Tome',
    'Africa/Dakar' => 'Africa/Dakar',
    'Indian/Mahe' => 'Indian/Mahe',
    'Africa/Freetown' => 'Africa/Freetown',
    'Africa/Mogadishu' => 'Africa/Mogadishu',
    'Africa/Johannesburg' => 'Africa/Johannesburg',
    'Africa/Khartoum' => 'Africa/Khartoum',
    'Africa/Mbabane' => 'Africa/Mbabane',
    'Africa/Dar_es_Salaam' => 'Africa/Dar es Salaam',
    'Africa/Lome' => 'Africa/Lome',
    'Africa/Tunis' => 'Africa/Tunis',
    'Africa/Kampala' => 'Africa/Kampala',
    'Africa/Lusaka' => 'Africa/Lusaka',
    'Africa/Harare' => 'Africa/Harare',
    'Antarctica/Casey' => 'Antarctica/Casey',
    'Antarctica/Davis' => 'Antarctica/Davis',
    'Antarctica/Mawson' => 'Antarctica/Mawson',
    'Indian/Kerguelen' => 'Indian/Kerguelen',
    'Antarctica/DumontDUrville' => 'Antarctica/DumontDUrville',
    'Antarctica/Syowa' => 'Antarctica/Syowa',
    'Antarctica/Vostok' => 'Antarctica/Vostok',
    'Antarctica/Rothera' => 'Antarctica/Rothera',
    'Antarctica/Palmer' => 'Antarctica/Palmer',
    'Antarctica/McMurdo' => 'Antarctica/McMurdo',
    'Asia/Kabul' => 'Asia/Kabul',
    'Asia/Yerevan' => 'Asia/Yerevan',
    'Asia/Baku' => 'Asia/Baku',
    'Asia/Bahrain' => 'Asia/Bahrain',
    'Asia/Dhaka' => 'Asia/Dhaka',
    'Asia/Thimphu' => 'Asia/Thimphu',
    'Indian/Chagos' => 'Indian/Chagos',
    'Asia/Brunei' => 'Asia/Brunei',
    'Asia/Rangoon' => 'Asia/Rangoon',
    'Asia/Phnom_Penh' => 'Asia/Phnom Penh',
    'Asia/Beijing' => 'Asia/Beijing',
    'Asia/Harbin' => 'Asia/Harbin',
    'Asia/Shanghai' => 'Asia/Shanghai',
    'Asia/Chongqing' => 'Asia/Chongqing',
    'Asia/Urumqi' => 'Asia/Urumqi',
    'Asia/Kashgar' => 'Asia/Kashgar',
    'Asia/Hong_Kong' => 'Asia/Hong Kong',
    'Asia/Taipei' => 'Asia/Taipei',
    'Asia/Macau' => 'Asia/Macau',
    'Asia/Nicosia' => 'Asia/Nicosia',
    'Asia/Tbilisi' => 'Asia/Tbilisi',
    'Asia/Dili' => 'Asia/Dili',
    'Asia/Calcutta' => 'Asia/Calcutta',
    'Asia/Jakarta' => 'Asia/Jakarta',
    'Asia/Pontianak' => 'Asia/Pontianak',
    'Asia/Makassar' => 'Asia/Makassar',
    'Asia/Jayapura' => 'Asia/Jayapura',
    'Asia/Tehran' => 'Asia/Tehran',
    'Asia/Baghdad' => 'Asia/Baghdad',
    'Asia/Jerusalem' => 'Asia/Jerusalem',
    'Asia/Tokyo' => 'Asia/Tokyo',
    'Asia/Amman' => 'Asia/Amman',
    'Asia/Almaty' => 'Asia/Almaty',
    'Asia/Qyzylorda' => 'Asia/Qyzylorda',
    'Asia/Aqtobe' => 'Asia/Aqtobe',
    'Asia/Aqtau' => 'Asia/Aqtau',
    'Asia/Oral' => 'Asia/Oral',
    'Asia/Bishkek' => 'Asia/Bishkek',
    'Asia/Seoul' => 'Asia/Seoul',
    'Asia/Pyongyang' => 'Asia/Pyongyang',
    'Asia/Kuwait' => 'Asia/Kuwait',
    'Asia/Vientiane' => 'Asia/Vientiane',
    'Asia/Beirut' => 'Asia/Beirut',
    'Asia/Kuala_Lumpur' => 'Asia/Kuala Lumpur',
    'Asia/Kuching' => 'Asia/Kuching',
    'Indian/Maldives' => 'Indian/Maldives',
    'Asia/Hovd' => 'Asia/Hovd',
    'Asia/Ulaanbaatar' => 'Asia/Ulaanbaatar',
    'Asia/Choibalsan' => 'Asia/Choibalsan',
    'Asia/Katmandu' => 'Asia/Katmandu',
    'Asia/Muscat' => 'Asia/Muscat',
    'Asia/Karachi' => 'Asia/Karachi',
    'Asia/Gaza' => 'Asia/Gaza',
    'Asia/Manila' => 'Asia/Manila',
    'Asia/Qatar' => 'Asia/Qatar',
    'Asia/Riyadh' => 'Asia/Riyadh',
    'Asia/Singapore' => 'Asia/Singapore',
    'Asia/Colombo' => 'Asia/Colombo',
    'Asia/Damascus' => 'Asia/Damascus',
    'Asia/Dushanbe' => 'Asia/Dushanbe',
    'Asia/Bangkok' => 'Asia/Bangkok',
    'Asia/Ashgabat' => 'Asia/Ashgabat',
    'Asia/Dubai' => 'Asia/Dubai',
    'Asia/Samarkand' => 'Asia/Samarkand',
    'Asia/Tashkent' => 'Asia/Tashkent',
    'Asia/Saigon' => 'Asia/Saigon',
    'Asia/Aden' => 'Asia/Aden',
    'Australia/Darwin' => 'Australia/Darwin',
    'Australia/Perth' => 'Australia/Perth',
    'Australia/Brisbane' => 'Australia/Brisbane',
    'Australia/Lindeman' => 'Australia/Lindeman',
    'Australia/Adelaide' => 'Australia/Adelaide',
    'Australia/Hobart' => 'Australia/Hobart',
    'Australia/Currie' => 'Australia/Currie',
    'Australia/Melbourne' => 'Australia/Melbourne',
    'Australia/Sydney' => 'Australia/Sydney',
    'Australia/Broken_Hill' => 'Australia/Broken Hill',
    'Indian/Christmas' => 'Indian/Christmas',
    'Pacific/Rarotonga' => 'Pacific/Rarotonga',
    'Indian/Cocos' => 'Indian/Cocos',
    'Pacific/Fiji' => 'Pacific/Fiji',
    'Pacific/Gambier' => 'Pacific/Gambier',
    'Pacific/Marquesas' => 'Pacific/Marquesas',
    'Pacific/Tahiti' => 'Pacific/Tahiti',
    'Pacific/Guam' => 'Pacific/Guam',
    'Pacific/Tarawa' => 'Pacific/Tarawa',
    'Pacific/Enderbury' => 'Pacific/Enderbury',
    'Pacific/Kiritimati' => 'Pacific/Kiritimati',
    'Pacific/Saipan' => 'Pacific/Saipan',
    'Pacific/Majuro' => 'Pacific/Majuro',
    'Pacific/Kwajalein' => 'Pacific/Kwajalein',
    'Pacific/Truk' => 'Pacific/Truk',
    'Pacific/Pohnpei' => 'Pacific/Pohnpei',
    'Pacific/Kosrae' => 'Pacific/Kosrae',
    'Pacific/Nauru' => 'Pacific/Nauru',
    'Pacific/Noumea' => 'Pacific/Noumea',
    'Pacific/Auckland' => 'Pacific/Auckland',
    'Pacific/Chatham' => 'Pacific/Chatham',
    'Pacific/Niue' => 'Pacific/Niue',
    'Pacific/Norfolk' => 'Pacific/Norfolk',
    'Pacific/Palau' => 'Pacific/Palau',
    'Pacific/Port_Moresby' => 'Pacific/Port Moresby',
    'Pacific/Pitcairn' => 'Pacific/Pitcairn',
    'Pacific/Pago_Pago' => 'Pacific/Pago Pago',
    'Pacific/Apia' => 'Pacific/Apia',
    'Pacific/Guadalcanal' => 'Pacific/Guadalcanal',
    'Pacific/Fakaofo' => 'Pacific/Fakaofo',
    'Pacific/Tongatapu' => 'Pacific/Tongatapu',
    'Pacific/Funafuti' => 'Pacific/Funafuti',
    'Pacific/Johnston' => 'Pacific/Johnston',
    'Pacific/Midway' => 'Pacific/Midway',
    'Pacific/Wake' => 'Pacific/Wake',
    'Pacific/Efate' => 'Pacific/Efate',
    'Pacific/Wallis' => 'Pacific/Wallis',
    'Europe/London' => 'Europe/London',
    'Europe/Dublin' => 'Europe/Dublin',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'Europe/Tirane',
    'Europe/Andorra' => 'Europe/Andorra',
    'Europe/Vienna' => 'Europe/Vienna',
    'Europe/Minsk' => 'Europe/Minsk',
    'Europe/Brussels' => 'Europe/Brussels',
    'Europe/Sofia' => 'Europe/Sofia',
    'Europe/Prague' => 'Europe/Prague',
    'Europe/Copenhagen' => 'Europe/Copenhagen',
    'Atlantic/Faeroe' => 'Atlantic/Faeroe',
    'America/Danmarkshavn' => 'America/Danmarkshavn',
    'America/Scoresbysund' => 'America/Scoresbysund',
    'America/Godthab' => 'America/Godthab',
    'America/Thule' => 'America/Thule',
    'Europe/Tallinn' => 'Europe/Tallinn',
    'Europe/Helsinki' => 'Europe/Helsinki',
    'Europe/Paris' => 'Europe/Paris',
    'Europe/Berlin' => 'Europe/Berlin',
    'Europe/Gibraltar' => 'Europe/Gibraltar',
    'Europe/Athens' => 'Europe/Athens',
    'Europe/Budapest' => 'Europe/Budapest',
    'Atlantic/Reykjavik' => 'Atlantic/Reykjavik',
    'Europe/Rome' => 'Europe/Rome',
    'Europe/Riga' => 'Europe/Riga',
    'Europe/Vaduz' => 'Europe/Vaduz',
    'Europe/Vilnius' => 'Europe/Vilnius',
    'Europe/Luxembourg' => 'Europe/Luxembourg',
    'Europe/Malta' => 'Europe/Malta',
    'Europe/Chisinau' => 'Europe/Chisinau',
    'Europe/Monaco' => 'Europe/Monaco',
    'Europe/Amsterdam' => 'Europe/Amsterdam',
    'Europe/Oslo' => 'Europe/Oslo',
    'Europe/Warsaw' => 'Europe/Warsaw',
    'Europe/Lisbon' => 'Europe/Lisbon',
    'Atlantic/Azores' => 'Atlantic/Azores',
    'Atlantic/Madeira' => 'Atlantic/Madeira',
    'Europe/Bucharest' => 'Europe/Bucharest',
    'Europe/Kaliningrad' => 'Europe/Kaliningrad',
    'Europe/Moscow' => 'Europe/Moscow',
    'Europe/Samara' => 'Europe/Samara',
    'Asia/Yekaterinburg' => 'Asia/Yekaterinburg',
    'Asia/Omsk' => 'Asia/Omsk',
    'Asia/Novosibirsk' => 'Asia/Novosibirsk',
    'Asia/Krasnoyarsk' => 'Asia/Krasnoyarsk',
    'Asia/Irkutsk' => 'Asia/Irkutsk',
    'Asia/Yakutsk' => 'Asia/Yakutsk',
    'Asia/Vladivostok' => 'Asia/Vladivostok',
    'Asia/Sakhalin' => 'Asia/Sakhalin',
    'Asia/Magadan' => 'Asia/Magadan',
    'Asia/Kamchatka' => 'Asia/Kamchatka',
    'Asia/Anadyr' => 'Asia/Anadyr',
    'Europe/Belgrade' => 'Europe/Belgrade',
    'Europe/Madrid' => 'Europe/Madrid',
    'Africa/Ceuta' => 'Africa/Ceuta',
    'Atlantic/Canary' => 'Atlantic/Canary',
    'Europe/Stockholm' => 'Europe/Stockholm',
    'Europe/Zurich' => 'Europe/Zurich',
    'Europe/Istanbul' => 'Europe/Istanbul',
    'Europe/Kiev' => 'Europe/Kiev',
    'Europe/Uzhgorod' => 'Europe/Uzhgorod',
    'Europe/Zaporozhye' => 'Europe/Zaporozhye',
    'Europe/Simferopol' => 'Europe/Simferopol',
    'America/New_York' => 'America/New York',
    'America/Chicago' => 'America/Chicago',
    'America/North_Dakota/Center' => 'America/North Dakota/Center',
    'America/Denver' => 'America/Denver',
    'America/Los_Angeles' => 'America/Los Angeles',
    'America/Juneau' => 'America/Juneau',
    'America/Yakutat' => 'America/Yakutat',
    'America/Anchorage' => 'America/Anchorage',
    'America/Nome' => 'America/Nome',
    'America/Adak' => 'America/Adak',
    'Pacific/Honolulu' => 'Pacific/Honolulu',
    'America/Phoenix' => 'America/Phoenix',
    'America/Boise' => 'America/Boise',
    'America/Indiana/Indianapolis' => 'America/Indiana/Indianapolis',
    'America/Indiana/Marengo' => 'America/Indiana/Marengo',
    'America/Indiana/Knox' => 'America/Indiana/Knox',
    'America/Indiana/Vevay' => 'America/Indiana/Vevay',
    'America/Kentucky/Louisville' => 'America/Kentucky/Louisville',
    'America/Kentucky/Monticello' => 'America/Kentucky/Monticello',
    'America/Detroit' => 'America/Detroit',
    'America/Menominee' => 'America/Menominee',
    'America/St_Johns' => 'America/St. Johns',
    'America/Goose_Bay' => 'America/Goose_Bay',
    'America/Halifax' => 'America/Halifax',
    'America/Glace_Bay' => 'America/Glace Bay',
    'America/Montreal' => 'America/Montreal',
    'America/Toronto' => 'America/Toronto',
    'America/Thunder_Bay' => 'America/Thunder Bay',
    'America/Nipigon' => 'America/Nipigon',
    'America/Rainy_River' => 'America/Rainy River',
    'America/Winnipeg' => 'America/Winnipeg',
    'America/Regina' => 'America/Regina',
    'America/Swift_Current' => 'America/Swift Current',
    'America/Edmonton' => 'America/Edmonton',
    'America/Vancouver' => 'America/Vancouver',
    'America/Dawson_Creek' => 'America/Dawson Creek',
    'America/Pangnirtung' => 'America/Pangnirtung',
    'America/Iqaluit' => 'America/Iqaluit',
    'America/Coral_Harbour' => 'America/Coral Harbour',
    'America/Rankin_Inlet' => 'America/Rankin Inlet',
    'America/Cambridge_Bay' => 'America/Cambridge Bay',
    'America/Yellowknife' => 'America/Yellowknife',
    'America/Inuvik' => 'America/Inuvik',
    'America/Whitehorse' => 'America/Whitehorse',
    'America/Dawson' => 'America/Dawson',
    'America/Cancun' => 'America/Cancun',
    'America/Merida' => 'America/Merida',
    'America/Monterrey' => 'America/Monterrey',
    'America/Mexico_City' => 'America/Mexico City',
    'America/Chihuahua' => 'America/Chihuahua',
    'America/Hermosillo' => 'America/Hermosillo',
    'America/Mazatlan' => 'America/Mazatlan',
    'America/Tijuana' => 'America/Tijuana',
    'America/Anguilla' => 'America/Anguilla',
    'America/Antigua' => 'America/Antigua',
    'America/Nassau' => 'America/Nassau',
    'America/Barbados' => 'America/Barbados',
    'America/Belize' => 'America/Belize',
    'Atlantic/Bermuda' => 'Atlantic/Bermuda',
    'America/Cayman' => 'America/Cayman',
    'America/Costa_Rica' => 'America/Costa Rica',
    'America/Havana' => 'America/Havana',
    'America/Dominica' => 'America/Dominica',
    'America/Santo_Domingo' => 'America/Santo Domingo',
    'America/El_Salvador' => 'America/El Salvador',
    'America/Grenada' => 'America/Grenada',
    'America/Guadeloupe' => 'America/Guadeloupe',
    'America/Guatemala' => 'America/Guatemala',
    'America/Port-au-Prince' => 'America/Port-au-Prince',
    'America/Tegucigalpa' => 'America/Tegucigalpa',
    'America/Jamaica' => 'America/Jamaica',
    'America/Martinique' => 'America/Martinique',
    'America/Montserrat' => 'America/Montserrat',
    'America/Managua' => 'America/Managua',
    'America/Panama' => 'America/Panama',
    'America/Puerto_Rico' => 'America/Puerto_Rico',
    'America/St_Kitts' => 'America/St_Kitts',
    'America/St_Lucia' => 'America/St_Lucia',
    'America/Miquelon' => 'America/Miquelon',
    'America/St_Vincent' => 'America/St. Vincent',
    'America/Grand_Turk' => 'America/Grand Turk',
    'America/Tortola' => 'America/Tortola',
    'America/St_Thomas' => 'America/St. Thomas',
    'America/Argentina/Buenos_Aires' => 'America/Argentina/Buenos Aires',
    'America/Argentina/Cordoba' => 'America/Argentina/Cordoba',
    'America/Argentina/Tucuman' => 'America/Argentina/Tucuman',
    'America/Argentina/La_Rioja' => 'America/Argentina/La_Rioja',
    'America/Argentina/San_Juan' => 'America/Argentina/San_Juan',
    'America/Argentina/Jujuy' => 'America/Argentina/Jujuy',
    'America/Argentina/Catamarca' => 'America/Argentina/Catamarca',
    'America/Argentina/Mendoza' => 'America/Argentina/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'America/Argentina/Rio Gallegos',
    'America/Argentina/Ushuaia' => 'America/Argentina/Ushuaia',
    'America/Aruba' => 'America/Aruba',
    'America/La_Paz' => 'America/La Paz',
    'America/Noronha' => 'America/Noronha',
    'America/Belem' => 'America/Belem',
    'America/Fortaleza' => 'America/Fortaleza',
    'America/Recife' => 'America/Recife',
    'America/Araguaina' => 'America/Araguaina',
    'America/Maceio' => 'America/Maceio',
    'America/Bahia' => 'America/Bahia',
    'America/Sao_Paulo' => 'America/Sao Paulo',
    'America/Campo_Grande' => 'America/Campo Grande',
    'America/Cuiaba' => 'America/Cuiaba',
    'America/Porto_Velho' => 'America/Porto_Velho',
    'America/Boa_Vista' => 'America/Boa Vista',
    'America/Manaus' => 'America/Manaus',
    'America/Eirunepe' => 'America/Eirunepe',
    'America/Rio_Branco' => 'America/Rio Branco',
    'America/Santiago' => 'America/Santiago',
    'Pacific/Easter' => 'Pacific/Easter',
    'America/Bogota' => 'America/Bogota',
    'America/Curacao' => 'America/Curacao',
    'America/Guayaquil' => 'America/Guayaquil',
    'Pacific/Galapagos' => 'Pacific/Galapagos',
    'Atlantic/Stanley' => 'Atlantic/Stanley',
    'America/Cayenne' => 'America/Cayenne',
    'America/Guyana' => 'America/Guyana',
    'America/Asuncion' => 'America/Asuncion',
    'America/Lima' => 'America/Lima',
    'Atlantic/South_Georgia' => 'Atlantic/South Georgia',
    'America/Paramaribo' => 'America/Paramaribo',
    'America/Port_of_Spain' => 'America/Port-of-Spain',
    'America/Montevideo' => 'America/Montevideo',
    'America/Caracas' => 'America/Caracas',
);

$app_list_strings['moduleList']['Sugar_Favorites'] = 'Omiljeni';
$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'GoToMeeting',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Google',
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Google Contacts',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'Zatraži',
    2 => 'Pristup',
    3 => 'Pogrešno',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Kampanja',
    'email' => 'e-mail',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Kampanja',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Kampanja',
    'email' => 'e-mail',
);
$app_strings ['documentation'] = array(
    'LBL_DOCS' => 'Dokumentacija',
    'ULT' => '02_Sugar_Ultimate',
    'ENT' => '02_Sugar_Enterprise',
    'CORP' => '03_Sugar_Corporate',
    'PRO' => '04_Sugar_Professional',
    'COM' => '05_Sugar_Community_Edition',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Baza znanja'; // Shows in the ALL menu entries
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - Categories'; // Shows in the ALL menu entries
$app_list_strings['aok_status_list']['Draft'] = 'Skica';
$app_list_strings['aok_status_list']['Expired'] = 'Istekao';
$app_list_strings['aok_status_list']['In_Review'] = 'U pregledu';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Privatno';
$app_list_strings['aok_status_list']['published_public'] = 'Javno';

$app_list_strings['moduleList']['FP_events'] = 'Događaji';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Lokacije';
$app_list_strings['invite_template_list'][''] = '';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Pozvan';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Nije pozvan';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Prisustvovano';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Nije prisustvovano';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Prihvaćeno';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Odbijeno';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Nema odaziva';

$app_strings['LBL_STATUS_EVENT'] = 'Status pozivnice';
$app_strings['LBL_ACCEPT_STATUS'] = 'Status prihvaćanja';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Odaberi ovu stranicu';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Odaberi sve';
$app_strings['LBL_LISTVIEW_NONE'] = 'Odznači sve';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Indeks događaj';
$app_list_strings['moduleList']['AOD_Index'] = 'Indeks';

$app_list_strings['moduleList']['AOP_AOP_Case_Events'] = 'Događaji Slučaja';
$app_list_strings['moduleList']['AOP_AOP_Case_Updates'] = 'AŽuriranja slučajeva';
$app_list_strings['moduleList']['AOP_Case_Events'] = 'Događaji Slučaja';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'AŽuriranja slučajeva';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== Please reply above this line ==========';



//aop
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Otvoren',
        'Closed' => 'Zatvoren',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Novi',
        'Open_Assigned' => 'Dodijeljen',
        'Closed_Closed' => 'Zatvoren',
        'Open_Pending Input' => 'Unos na čekanju',
        'Closed_Rejected' => 'Odbijen',
        'Closed_Duplicate' => 'Dupliciraj',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Pojedinačan korisnik',
        'Account' => 'Korisnik računa',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'Koristi AOP zadano',
    'singleUser' => 'Pojedinačan korisnik',
    'roundRobin' => 'Razigravanje',
    'leastBusy' => 'Najmanje zauzeto',
    'random' => 'Nasumično',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Izvještaji';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Uvjeti izvješća';
$app_list_strings['moduleList']['AOR_Charts'] = 'Dijagrami izvješća';
$app_list_strings['moduleList']['AOR_Fields'] = 'Polja izvješća';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Planirana izvješća';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Jednako';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Različito';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Veće Od';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Manje Od';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Veće od ili Jednako';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Manje od ili Jednako';
$app_list_strings['aor_operator_list']['Contains'] = 'Sadrži';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Počinje sa';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Zavrsava sa';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'Y-m-d';
$app_list_strings['aor_format_options']['Ymd'] = 'Ymd';
$app_list_strings['aor_format_options']['Y-m'] = 'Y-m';
$app_list_strings['aor_format_options']['d/m/Y'] = 'd/m/Y';
$app_list_strings['aor_format_options']['Y'] = 'Y';
$app_list_strings['aor_condition_operator_list']['And'] = 'I';
$app_list_strings['aor_condition_operator_list']['OR'] = 'ILI';
$app_list_strings['aor_condition_type_list']['Value'] = 'Vrijednost';
$app_list_strings['aor_condition_type_list']['Field'] = 'Polje';
$app_list_strings['aor_condition_type_list']['Date'] = 'Datum';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Jedan od';
$app_list_strings['aor_condition_type_list']['Period'] = 'Period';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Current User';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minuta';
$app_list_strings['aor_date_type_list']['hour'] = 'Sati';
$app_list_strings['aor_date_type_list']['day'] = 'Dana';
$app_list_strings['aor_date_type_list']['week'] = 'Sedmica';
$app_list_strings['aor_date_type_list']['month'] = 'Mjeseci';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Radno vrijeme';
$app_list_strings['aor_date_options']['now'] = 'Sad';
$app_list_strings['aor_date_options']['field'] = 'ovo polje';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Uzlazno';
$app_list_strings['aor_sort_operator']['DESC'] = 'Silazno';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Brojati';
$app_list_strings['aor_function_list']['MIN'] = 'Minimum';
$app_list_strings['aor_function_list']['MAX'] = 'Maksimum';
$app_list_strings['aor_function_list']['SUM'] = 'Zbir';
$app_list_strings['aor_function_list']['AVG'] = 'Prosjek';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Brojati';
$app_list_strings['aor_total_options']['SUM'] = 'Zbroj';
$app_list_strings['aor_total_options']['AVG'] = 'Prosjek';
$app_list_strings['aor_chart_types']['bar'] = 'Trakasti grafikon';
$app_list_strings['aor_chart_types']['line'] = 'Linijski grafikon';
$app_list_strings['aor_chart_types']['pie'] = 'Pita grafikon';
$app_list_strings['aor_chart_types']['radar'] = 'Radar grafikon';
$app_list_strings['aor_chart_types']['polar'] = 'Polarni grafikon';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Stacked bar';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Grouped bar';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Mjesečno';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Sedmično';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Dnevno';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Aktivan';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Neaktivan';
$app_list_strings['aor_email_type_list']['Email Address'] = 'E-pošta';
$app_list_strings['aor_email_type_list']['Specify User'] = 'korisnik';
$app_list_strings['aor_email_type_list']['Users'] = 'Korisnici';
$app_list_strings['aor_assign_options']['all'] = 'Svi Korisnici';
$app_list_strings['aor_assign_options']['role'] = 'SVI Korisnici u Ulozi';
$app_list_strings['aor_assign_options']['security_group'] = 'SVI Korisnici u Sigurnosnoj Grupi';
$app_list_strings['date_time_period_list']['today'] = 'Danas';
$app_list_strings['date_time_period_list']['yesterday'] = 'Jučer';
$app_list_strings['date_time_period_list']['this_week'] = 'Ova sedmica';
$app_list_strings['date_time_period_list']['last_week'] = 'Prošla sedmica';
$app_list_strings['date_time_period_list']['last_month'] = 'Prošli mjesec';
$app_list_strings['date_time_period_list']['this_month'] = 'Ovaj mejsec';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Ovaj kvartal';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Prošli kvartal';
$app_list_strings['date_time_period_list']['this_year'] = 'Ova godina';
$app_list_strings['date_time_period_list']['last_year'] = 'Prošla godina';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'na';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'na';
$app_strings['LBL_CRON_AT'] = 'na';
$app_strings['LBL_CRON_RAW'] = 'Napredno';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Sat';
$app_strings['LBL_CRON_DAY'] = 'dan';
$app_strings['LBL_CRON_MONTH'] = 'Mjesec';
$app_strings['LBL_CRON_DOW'] = 'DOW';
$app_strings['LBL_CRON_DAILY'] = 'Dnevno';
$app_strings['LBL_CRON_WEEKLY'] = 'Sednično';
$app_strings['LBL_CRON_MONTHLY'] = 'Mjesečno';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Ugovori';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Fakture';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - Templates';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Kategorije proizvoda';
$app_list_strings['moduleList']['AOS_Products'] = 'Proizvodi';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Stavke';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Grupe stavaka';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Ponude';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analitičar';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Konkurent';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Kupac';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Investitor';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Tisak';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Mogući klijent';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Preprodavač';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Ostalo';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Skica';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Pregovor';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Dostavljeno';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Na čekanju';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Potvrđeno';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Dobiveno';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Izgubljeno';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Nerealizirano';
$app_list_strings['quote_term_dom']['Net 15'] = 'Neto 15 dana';
$app_list_strings['quote_term_dom']['Net 30'] = 'Neto 30 dana';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Odobreno';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Neodobreno';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7.5%';
$app_list_strings['vat_list']['17.5'] = '17.5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Postotak';
$app_list_strings['discount_list']['Amount'] = 'Iznos';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analitičar';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Konkurent';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Kupac';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Investitor';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Tisak';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Mogući klijent';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Preprodavač';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Ostalo';
$app_list_strings['invoice_status_dom']['Paid'] = 'Plaćeno';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Neplaćeno';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Odgođeno';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Nefakturisano';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Fakturisano';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Laptopi';
$app_list_strings['product_category_dom']['Desktops'] = 'Stolna računala';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Roba';
$app_list_strings['product_type_dom']['Service'] = 'Usluga';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Ponude';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Fakture';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Ugovori';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Ponude';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Fakture';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Ugovori';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Klijenti';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Kontakti';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Potencijalni klijenti';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Nije započet';
$app_list_strings['contract_status_list']['In Progress'] = 'U toku';
$app_list_strings['contract_status_list']['Signed'] = 'Potpisano';
$app_list_strings['contract_type_list']['Type'] = 'Tip';
$app_strings['LBL_GENERATE_LETTER'] = 'Generirati dokument';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Molim odaberite predložak';
$app_strings['LBL_NO_TEMPLATE'] = 'ERROR\nNije pronađen niti jedan predložak.\nMolimo pokrenite Modul PDF Predložaka i stvorite novi';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Tijek Rada';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Uvijeti tijeka rada';
$app_list_strings['moduleList']['AOW_Processed'] = 'Obraditi reviziju';
$app_list_strings['moduleList']['AOW_Actions'] = 'Radnje tijeka rada';
$app_list_strings['aow_status_list']['Active'] = 'Aktivan';
$app_list_strings['aow_status_list']['Inactive'] = 'Neaktivan';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Jednako';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Različito';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Veće Od';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Manje Od';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Veće Od ili Jednako';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Manje Od ili Jednako';
$app_list_strings['aow_operator_list']['Contains'] = 'Sadrži';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Počinje sa';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Ends With';
$app_list_strings['aow_operator_list']['is_null'] = 'Je ništavan';
$app_list_strings['aow_sql_operator_list']['Equal_To'] = '=';
$app_list_strings['aow_sql_operator_list']['Not_Equal_To'] = '!=';
$app_list_strings['aow_sql_operator_list']['Greater_Than'] = '>';
$app_list_strings['aow_sql_operator_list']['Less_Than'] = '<';
$app_list_strings['aow_sql_operator_list']['Greater_Than_or_Equal_To'] = '>=';
$app_list_strings['aow_sql_operator_list']['Less_Than_or_Equal_To'] = '<=';
$app_list_strings['aow_sql_operator_list']['Contains'] = 'LIKE';
$app_list_strings['aow_sql_operator_list']['Starts_With'] = 'LIKE';
$app_list_strings['aow_sql_operator_list']['Ends_With'] = 'LIKE';
$app_list_strings['aow_sql_operator_list']['is_null'] = 'IS NULL';
$app_list_strings['aow_process_status_list']['Complete'] = 'Dovršeno';
$app_list_strings['aow_process_status_list']['Running'] = 'Traje';
$app_list_strings['aow_process_status_list']['Pending'] = 'U toku';
$app_list_strings['aow_process_status_list']['Failed'] = 'Neuspjelo';
$app_list_strings['aow_condition_operator_list']['And'] = 'I';
$app_list_strings['aow_condition_operator_list']['OR'] = 'ILI';
$app_list_strings['aow_condition_type_list']['Value'] = 'Vrijednost';
$app_list_strings['aow_condition_type_list']['Field'] = 'Polje';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Svaka Promjena';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'U sigurnosnoj grupi';
$app_list_strings['aow_condition_type_list']['Date'] = 'Datum';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Jedan od';
$app_list_strings['aow_action_type_list']['Value'] = 'Vrijednost';
$app_list_strings['aow_action_type_list']['Field'] = 'Polje';
$app_list_strings['aow_action_type_list']['Date'] = 'Datum';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Razigravanje';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Najmanje zauzet';
$app_list_strings['aow_action_type_list']['Random'] = 'Nasumično';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Vrijednost';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Polje';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minuta';
$app_list_strings['aow_date_type_list']['hour'] = 'Sati';
$app_list_strings['aow_date_type_list']['day'] = 'Dana';
$app_list_strings['aow_date_type_list']['week'] = 'Tjedana';
$app_list_strings['aow_date_type_list']['month'] = 'Mjeseci';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Radno vrijeme';
$app_list_strings['aow_date_options']['now'] = 'Sad';
$app_list_strings['aow_date_options']['today'] = 'Danas';
$app_list_strings['aow_date_options']['field'] = 'Ovo Polje';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'Svi korisnici';
$app_list_strings['aow_assign_options']['role'] = 'SVI Korisnici u Ulozi';
$app_list_strings['aow_assign_options']['security_group'] = 'SVI Korisnici u Sigurnosnoj Grupi';
$app_list_strings['aow_email_type_list']['Email Address'] = 'E-pošta';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Zapiši E-mail';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Povezano polje';
$app_list_strings['aow_email_type_list']['Specify User'] = 'korisnik';
$app_list_strings['aow_email_type_list']['Users'] = 'Korisnici';
$app_list_strings['aow_email_type_list']['Record Field'] = 'Polje';
$app_list_strings['aow_email_to_list']['to'] = 'Prema';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Bcc';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Svi zapisi';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Novi zapisi';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Modificirani zapisi';
$app_list_strings['aow_run_when_list']['Always'] = 'Uvijek';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Only On Save';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Only In The Scheduler';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Projects - Templates';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Predložak Projektnog Zadatka';
$app_list_strings['relationship_type_list']['FS'] = 'Finalizirati početak';
$app_list_strings['relationship_type_list']['SS'] = 'Započeti početak';
$app_list_strings['moduleList']['AM_ProjectHolidays'] = 'Neradni dani projekta';
$app_list_strings['holiday_resource_dom']['Contacts'] = 'Kontakti';
$app_list_strings['holiday_resource_dom']['Users'] = 'Korisnici';
$app_list_strings['duration_unit_dom']['Days'] = 'Dana';
$app_list_strings['duration_unit_dom']['Hours'] = 'Sati';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Pogledaj Gantt';
$app_strings['LBL_GANTT_BUTTON_TITLE'] = 'Pogledaj Gantt';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'View Detail'; //PR 2248
$app_strings['LBL_DETAIL_BUTTON_TITLE'] = 'View Detail'; //PR 2248
$app_strings['LBL_CREATE_PROJECT'] = 'Kreiraj projekt';

//gmaps
$app_strings['LBL_MAP'] = 'Mapa';
$app_strings['LBL_MAPS'] = 'Karte';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Geografska dužina';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Geografska širina';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Status geokodiranja';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Adresa';
$app_strings['LBL_BUG_FIX'] = 'Ispravljanje bugova';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Karte';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Maps - Markers';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Maps - Areas';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Maps - Address Cache';

$app_list_strings['map_unit_type_list']['mi'] = 'Milja';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometara';

$app_list_strings['map_module_type_list']['Accounts'] = 'Klijenti';
$app_list_strings['map_module_type_list']['Contacts'] = 'Kontakti';
$app_list_strings['map_module_type_list']['Cases'] = 'Slučajevi';
$app_list_strings['map_module_type_list']['Leads'] = 'Potencijalni klijenti';
$app_list_strings['map_module_type_list']['Meetings'] = 'Sastanci';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Prodajne prilike';
$app_list_strings['map_module_type_list']['Project'] = 'Projekti';
$app_list_strings['map_module_type_list']['Prospects'] = 'Ciljevi';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Klijenti';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Kontakti';
$app_list_strings['map_relate_type_list']['Cases'] = 'Slučaj';
$app_list_strings['map_relate_type_list']['Leads'] = 'Potencijalni klijenti';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Sastanak';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Prodajna prilika';
$app_list_strings['map_relate_type_list']['Project'] = 'Projekt';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Cilj';

$app_list_strings['marker_image_list']['accident'] = 'Nezgoda';
$app_list_strings['marker_image_list']['administration'] = 'Administracija';
$app_list_strings['marker_image_list']['agriculture'] = 'Agrokultura';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Mala letjelica';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Zrakoplovni turizam';
$app_list_strings['marker_image_list']['airport'] = 'Zračna luka';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amfiteatar';
$app_list_strings['marker_image_list']['apartment'] = 'Apartman';
$app_list_strings['marker_image_list']['aquarium'] = 'Akvarij';
$app_list_strings['marker_image_list']['arch'] = 'Svod';
$app_list_strings['marker_image_list']['atm'] = 'Bankomat';
$app_list_strings['marker_image_list']['audio'] = 'Audio';
$app_list_strings['marker_image_list']['bank'] = 'Banka';
$app_list_strings['marker_image_list']['bank_euro'] = 'Banka Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Banka funta';
$app_list_strings['marker_image_list']['bar'] = 'Bar';
$app_list_strings['marker_image_list']['beach'] = 'Plaža';
$app_list_strings['marker_image_list']['beautiful'] = 'Lijep';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Parkiralište za bicikle';
$app_list_strings['marker_image_list']['big_city'] = 'Velegrad';
$app_list_strings['marker_image_list']['bridge'] = 'Most';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Moderni most';
$app_list_strings['marker_image_list']['bus'] = 'Autobus';
$app_list_strings['marker_image_list']['cable_car'] = 'Žičara';
$app_list_strings['marker_image_list']['car'] = 'Automobil';
$app_list_strings['marker_image_list']['car_rental'] = 'Iznajmljivanje automobila';
$app_list_strings['marker_image_list']['carrepair'] = 'Popravak automobila';
$app_list_strings['marker_image_list']['castle'] = 'Dvorac';
$app_list_strings['marker_image_list']['cathedral'] = 'Katedrala';
$app_list_strings['marker_image_list']['chapel'] = 'Kapela';
$app_list_strings['marker_image_list']['church'] = 'Crkva';
$app_list_strings['marker_image_list']['city_square'] = 'Gradski trg';
$app_list_strings['marker_image_list']['cluster'] = 'Klaster';
$app_list_strings['marker_image_list']['cluster_2'] = 'Klaster 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Klaster 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Klaster 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Klaster 5';
$app_list_strings['marker_image_list']['coffee'] = 'Kava';
$app_list_strings['marker_image_list']['community_centre'] = 'Zajednički centar';
$app_list_strings['marker_image_list']['company'] = 'Kompanija';
$app_list_strings['marker_image_list']['conference'] = 'Konferencija';
$app_list_strings['marker_image_list']['construction'] = 'Gradilište';
$app_list_strings['marker_image_list']['convenience'] = 'Pogodnost';
$app_list_strings['marker_image_list']['court'] = 'Sud';
$app_list_strings['marker_image_list']['cruise'] = 'Krstarenje';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Mjenjačnica';
$app_list_strings['marker_image_list']['customs'] = 'Carina';
$app_list_strings['marker_image_list']['cycling'] = 'Bicikliranje';
$app_list_strings['marker_image_list']['dam'] = 'Brana';
$app_list_strings['marker_image_list']['days_dim'] = 'Days Dim';
$app_list_strings['marker_image_list']['days_dom'] = 'Days Dom';
$app_list_strings['marker_image_list']['days_jeu'] = 'Days Jeu';
$app_list_strings['marker_image_list']['days_jue'] = 'Days Jue';
$app_list_strings['marker_image_list']['days_lun'] = 'Days Lun';
$app_list_strings['marker_image_list']['days_mar'] = 'Days Mar';
$app_list_strings['marker_image_list']['days_mer'] = 'Days Mer';
$app_list_strings['marker_image_list']['days_mie'] = 'Days Mie';
$app_list_strings['marker_image_list']['days_qua'] = 'Days Qua';
$app_list_strings['marker_image_list']['days_qui'] = 'Days Qui';
$app_list_strings['marker_image_list']['days_sab'] = 'Days Sab';
$app_list_strings['marker_image_list']['days_sam'] = 'Days Sam';
$app_list_strings['marker_image_list']['days_seg'] = 'Days Seg';
$app_list_strings['marker_image_list']['days_sex'] = 'Days Sex';
$app_list_strings['marker_image_list']['days_ter'] = 'Days Ter';
$app_list_strings['marker_image_list']['days_ven'] = 'Days Ven';
$app_list_strings['marker_image_list']['days_vie'] = 'Days Vie';
$app_list_strings['marker_image_list']['dentist'] = 'Zubar';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Robna kuća';
$app_list_strings['marker_image_list']['disability'] = 'Invalidnost';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Prakiralište za invalide';
$app_list_strings['marker_image_list']['doctor'] = 'Liječnik';
$app_list_strings['marker_image_list']['dog_leash'] = 'Dog Leash';
$app_list_strings['marker_image_list']['down'] = 'Dolje';
$app_list_strings['marker_image_list']['down_left'] = 'Dolje lijevo';
$app_list_strings['marker_image_list']['down_right'] = 'Dolje desno';
$app_list_strings['marker_image_list']['down_then_left'] = 'Dolje pa lijevo';
$app_list_strings['marker_image_list']['down_then_right'] = 'Dolje pa desno';
$app_list_strings['marker_image_list']['drugs'] = 'Lijekovi';
$app_list_strings['marker_image_list']['elevator'] = 'Dizalo';
$app_list_strings['marker_image_list']['embassy'] = 'Veleposlanstvo';
$app_list_strings['marker_image_list']['expert'] = 'Stučnjak';
$app_list_strings['marker_image_list']['factory'] = 'Tvornica';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Padajuće kamenje';
$app_list_strings['marker_image_list']['fast_food'] = 'Brza prehrana';
$app_list_strings['marker_image_list']['festival'] = 'Festival';
$app_list_strings['marker_image_list']['fjord'] = 'Fjord';
$app_list_strings['marker_image_list']['forest'] = 'Šuma';
$app_list_strings['marker_image_list']['fountain'] = 'Fontana';
$app_list_strings['marker_image_list']['friday'] = 'Petak';
$app_list_strings['marker_image_list']['garden'] = 'Vrt';
$app_list_strings['marker_image_list']['gas_station'] = 'Benzinska postaja';
$app_list_strings['marker_image_list']['geyser'] = 'Gejzir';
$app_list_strings['marker_image_list']['gifts'] = 'Darovi';
$app_list_strings['marker_image_list']['gourmet'] = 'Sladokusac';
$app_list_strings['marker_image_list']['grocery'] = 'Namirnice';
$app_list_strings['marker_image_list']['hairsalon'] = 'Frizerski salon';
$app_list_strings['marker_image_list']['helicopter'] = 'Helikopter';
$app_list_strings['marker_image_list']['highway'] = 'Autocesta';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Povijesna jezgra';
$app_list_strings['marker_image_list']['home'] = 'Početno';
$app_list_strings['marker_image_list']['hospital'] = 'Bolnica';
$app_list_strings['marker_image_list']['hostel'] = 'Hostel';
$app_list_strings['marker_image_list']['hotel'] = 'Hotel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Hotel 1 zvjezdica';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hotel 2 zvjezdice';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hote 3 zvjezdice';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hotel 4 zvjezdice';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hote 5 zvjezdica';
$app_list_strings['marker_image_list']['info'] = 'Informacije';
$app_list_strings['marker_image_list']['justice'] = 'Pravo';
$app_list_strings['marker_image_list']['lake'] = 'Jezero';
$app_list_strings['marker_image_list']['laundromat'] = 'Praonica rublja';
$app_list_strings['marker_image_list']['left'] = 'Lijevo';
$app_list_strings['marker_image_list']['left_then_down'] = 'Lijevo pa dolje';
$app_list_strings['marker_image_list']['left_then_up'] = 'Lijevo pa gore';
$app_list_strings['marker_image_list']['library'] = 'Knjižnica';
$app_list_strings['marker_image_list']['lighthouse'] = 'Svjetionik';
$app_list_strings['marker_image_list']['liquor'] = 'Žestoka pića';
$app_list_strings['marker_image_list']['lock'] = 'Ključanica';
$app_list_strings['marker_image_list']['main_road'] = 'Glavna cesta';
$app_list_strings['marker_image_list']['massage'] = 'Masaža';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Toranj za mobitele';
$app_list_strings['marker_image_list']['modern_tower'] = 'Moderni toranj';
$app_list_strings['marker_image_list']['monastery'] = 'Samostan';
$app_list_strings['marker_image_list']['monday'] = 'Ponedjeljak';
$app_list_strings['marker_image_list']['monument'] = 'Spomenik';
$app_list_strings['marker_image_list']['mosque'] = 'Džamija';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motocikl';
$app_list_strings['marker_image_list']['museum'] = 'Muzej';
$app_list_strings['marker_image_list']['music_live'] = 'Živa muzika';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Crpilište nafte';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagoda';
$app_list_strings['marker_image_list']['palace'] = 'Palača';
$app_list_strings['marker_image_list']['panoramic'] = 'Panoramski';
$app_list_strings['marker_image_list']['park'] = 'Park';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Park i prijevoz';
$app_list_strings['marker_image_list']['parking'] = 'Parkiralište';
$app_list_strings['marker_image_list']['photo'] = 'Fotograf';
$app_list_strings['marker_image_list']['picnic'] = 'Piknik';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Neposjećena mjesta';
$app_list_strings['marker_image_list']['places_visited'] = 'Posjećena mjesta';
$app_list_strings['marker_image_list']['playground'] = 'Igralište';
$app_list_strings['marker_image_list']['police'] = 'Policija';
$app_list_strings['marker_image_list']['port'] = 'Luka';
$app_list_strings['marker_image_list']['postal'] = 'Pošta';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Dalekovod';
$app_list_strings['marker_image_list']['power_plant'] = 'Elektrana';
$app_list_strings['marker_image_list']['power_substation'] = 'Trafostanica';
$app_list_strings['marker_image_list']['public_art'] = 'Javna Umjetnost';
$app_list_strings['marker_image_list']['rain'] = 'Kiša';
$app_list_strings['marker_image_list']['real_estate'] = 'Nekretnina';
$app_list_strings['marker_image_list']['regroup'] = 'Regrupiranje';
$app_list_strings['marker_image_list']['resort'] = 'Boravište';
$app_list_strings['marker_image_list']['restaurant'] = 'Restoran';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Afrički restoran';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Roštilj restoran';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Bifet';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Kineski restoran';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Riblji restoran';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Riblji čips restoran';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Gurmanski restoran';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Grčki restoran';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Indijski restoran';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Talijanski restoran';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Japanski restoran';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Kebab restoran';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Korejski restoran';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Mediteranski restoran';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Meksički restoran';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Romantični restoran';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Tajlandski restoran';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Turski restoran';
$app_list_strings['marker_image_list']['right'] = 'Desno';
$app_list_strings['marker_image_list']['right_then_down'] = 'Desno pa dolje';
$app_list_strings['marker_image_list']['right_then_up'] = 'Desno pa gore';
$app_list_strings['marker_image_list']['satursday'] = 'Subota';
$app_list_strings['marker_image_list']['school'] = 'Škola';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Trgovački centar';
$app_list_strings['marker_image_list']['shore'] = 'Obala';
$app_list_strings['marker_image_list']['sight'] = 'Vidik';
$app_list_strings['marker_image_list']['small_city'] = 'Mali grad';
$app_list_strings['marker_image_list']['snow'] = 'Snijeg';
$app_list_strings['marker_image_list']['spaceport'] = 'Svemirska luka';
$app_list_strings['marker_image_list']['speed_100'] = 'Brzina 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Brzina 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Brzina 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Brzina 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Brzina 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Brzina 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Brzina 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Brzina 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Brzina 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Brzina 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Brzina 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Brzina 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Izbočina';
$app_list_strings['marker_image_list']['stadium'] = 'Stadion';
$app_list_strings['marker_image_list']['statue'] = 'Kip';
$app_list_strings['marker_image_list']['steam_train'] = 'Parni vlak';
$app_list_strings['marker_image_list']['stop'] = 'Stop';
$app_list_strings['marker_image_list']['stoplight'] = 'Zaustavno svijetlo';
$app_list_strings['marker_image_list']['subway'] = 'Podzemna';
$app_list_strings['marker_image_list']['sun'] = 'Sunce';
$app_list_strings['marker_image_list']['sunday'] = 'Nedjelja';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermarket';
$app_list_strings['marker_image_list']['synagogue'] = 'Sinagoga';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Taksi';
$app_list_strings['marker_image_list']['taxiway'] = 'Put za taksi';
$app_list_strings['marker_image_list']['teahouse'] = 'Čajdžinica';
$app_list_strings['marker_image_list']['telephone'] = 'Telefon';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Hinduistički hram';
$app_list_strings['marker_image_list']['terrace'] = 'Terasa';
$app_list_strings['marker_image_list']['text'] = 'Tekst';
$app_list_strings['marker_image_list']['theater'] = 'Kazalište';
$app_list_strings['marker_image_list']['theme_park'] = 'Lunapark';
$app_list_strings['marker_image_list']['thursday'] = 'Četvrtak';
$app_list_strings['marker_image_list']['toilets'] = 'WC';
$app_list_strings['marker_image_list']['toll_station'] = 'Naplatna postaja';
$app_list_strings['marker_image_list']['tower'] = 'Toranj';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Prometna kamera';
$app_list_strings['marker_image_list']['train'] = 'Vlak';
$app_list_strings['marker_image_list']['tram'] = 'Tramvaj';
$app_list_strings['marker_image_list']['truck'] = 'Kamion';
$app_list_strings['marker_image_list']['tuesday'] = 'Utorak';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunel';
$app_list_strings['marker_image_list']['turn_left'] = 'Skrenite lijevo';
$app_list_strings['marker_image_list']['turn_right'] = 'Skrenite desno';
$app_list_strings['marker_image_list']['university'] = 'Sveučilište';
$app_list_strings['marker_image_list']['up'] = 'Gore';
$app_list_strings['marker_image_list']['up_left'] = 'Gore Lijevo';
$app_list_strings['marker_image_list']['up_right'] = 'Gore Desno';
$app_list_strings['marker_image_list']['up_then_left'] = 'Gore pa Lijevo';
$app_list_strings['marker_image_list']['up_then_right'] = 'Gore pa Desno';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Video';
$app_list_strings['marker_image_list']['villa'] = 'Vila';
$app_list_strings['marker_image_list']['water'] = 'Voda';
$app_list_strings['marker_image_list']['waterfall'] = 'Vodopad';
$app_list_strings['marker_image_list']['watermill'] = 'Mlin';
$app_list_strings['marker_image_list']['waterpark'] = 'Vodeni park';
$app_list_strings['marker_image_list']['watertower'] = 'Vodeni toranj';
$app_list_strings['marker_image_list']['wednesday'] = 'Srijeda';
$app_list_strings['marker_image_list']['wifi'] = 'Bežični internet';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Turbina za vjetar';
$app_list_strings['marker_image_list']['windmill'] = 'Vjetrenjača';
$app_list_strings['marker_image_list']['winery'] = 'Vinarija';
$app_list_strings['marker_image_list']['work_office'] = 'Ured';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Svjetska kulturna baština';
$app_list_strings['marker_image_list']['zoo'] = 'Zoološki vrt';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Izvan ureda';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'Na sastanku';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Napravi novi raspored';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Molim unesite podatke o novom rasporedu';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Datum:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Razlog:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Molim odaberite važeći datum';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Molim odaberite razlog';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Napravi novi raspored';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Povijest pokušaja poziva';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Pokušaji poziva';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Upravljanje sigurnosnim grupama';
$app_strings['LBL_LOGIN_AS'] = 'Prijava kao';
$app_strings['LBL_LOGOUT_AS'] = 'Odjava kao';
$app_strings['LBL_SECURITYGROUP'] = 'Sigurnosna grupa';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Outbound Email Accounts';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_FACEBOOK_USER_C'] = 'Facebook korisnik';
$app_strings['LBL_TWITTER_USER_C'] = 'Twitter korisnik';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Detalji društvenih kanala';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filtriraj';

$app_strings['LBL_QUICK_ACCOUNT'] = 'Kreiraj tvrtku';
$app_strings['LBL_QUICK_CONTACT'] = 'Kreiraj kontakt';
$app_strings['LBL_QUICK_OPPORTUNITY'] = 'Kreiraj prodajnu priliku';
$app_strings['LBL_QUICK_LEAD'] = 'Kreiraj potencijalnog klijenta';
$app_strings['LBL_QUICK_DOCUMENT'] = 'Kreiraj dokument';
$app_strings['LBL_QUICK_CALL'] = 'Zabilježi poziv';
$app_strings['LBL_QUICK_TASK'] = 'Kreiraj zadatak';
$app_strings['LBL_COLLECTION_TYPE'] = 'Tip';

$app_strings['LBL_ADD_TAB'] = 'Dodaj tab';
$app_strings['LBL_EDIT_TAB'] = 'Uredi kartice';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SuiteCRM Dashboard'; //Can be translated in all caps. This string will be used by SuiteP template menu actions
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Unesite naziv nadzorne ploče';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Broj stupaca';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Jeste li sigurni želite li izbrisati';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'nadzornu ploču?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Dodaj stranicu nadzorne ploče';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Uklonite trenutnu stranicu nadzorne ploče';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Preimenuj stranicu nadzorne ploče';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'Radnje'; //Can be translated in all caps. This string will be used by SuiteP template menu actions

$app_strings['LBL_DISCOVER_SUITECRM'] = 'Otkrijte SuiteCRM';

$app_list_strings['collection_temp_list'] = array('Tasks' => 'Zadaci', 'Meetings' => 'Sastanci', 'Calls' => 'Pozivi', 'Notes' => 'Zabilješke', 'Emails' => 'E-pošte');

$app_list_strings['moduleList']['TemplateEditor'] = 'Template Part Editor';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "You have clicked away from the field you were editing without saving it. Click ok if you're happy to lose your change, or cancel if you would like to continue editing";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "There was an error loading the field. Your session may have timed out. Please log in again to fix this";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'Prodaje',
    'getAccountsSpotsData' => 'Klijenti',
    'getLeadsSpotsData' => 'Potencijalni klijenti',
    'getServiceSpotsData' => 'Usluga',
    'getMarketingSpotsData' => 'Marketing',
    'getMarketingActivitySpotsData' => 'Marketing Activity',
    'getActivitiesSpotsData' => 'Aktivnosti',
    'getQuotesSpotsData' => 'Ponude'
);

$app_list_strings['moduleList']['Spots'] = 'Spots';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Radno vrijeme';
$app_list_strings['business_hours_list']['0'] = '12am';
$app_list_strings['business_hours_list']['1'] = '1am';
$app_list_strings['business_hours_list']['2'] = '2am';
$app_list_strings['business_hours_list']['3'] = '3am';
$app_list_strings['business_hours_list']['4'] = '4am';
$app_list_strings['business_hours_list']['5'] = '5am';
$app_list_strings['business_hours_list']['6'] = '6am';
$app_list_strings['business_hours_list']['7'] = '7am';
$app_list_strings['business_hours_list']['8'] = '8am';
$app_list_strings['business_hours_list']['9'] = '9am';
$app_list_strings['business_hours_list']['10'] = '10am';
$app_list_strings['business_hours_list']['11'] = '11am';
$app_list_strings['business_hours_list']['12'] = '12pm';
$app_list_strings['business_hours_list']['13'] = '1pm';
$app_list_strings['business_hours_list']['14'] = '2pm';
$app_list_strings['business_hours_list']['15'] = '3pm';
$app_list_strings['business_hours_list']['16'] = '4pm';
$app_list_strings['business_hours_list']['17'] = '5pm';
$app_list_strings['business_hours_list']['18'] = '6pm';
$app_list_strings['business_hours_list']['19'] = '7pm';
$app_list_strings['business_hours_list']['20'] = '8pm';
$app_list_strings['business_hours_list']['21'] = '9pm';
$app_list_strings['business_hours_list']['22'] = '10pm';
$app_list_strings['business_hours_list']['23'] = '11pm';
$app_list_strings['day_list']['Monday'] = 'Ponedjeljak';
$app_list_strings['day_list']['Tuesday'] = 'Utorak';
$app_list_strings['day_list']['Wednesday'] = 'Srijeda';
$app_list_strings['day_list']['Thursday'] = 'Četvrtak';
$app_list_strings['day_list']['Friday'] = 'Petak';
$app_list_strings['day_list']['Saturday'] = 'Subota';
$app_list_strings['day_list']['Sunday'] = 'Nedjelja';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Letter';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Legal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Portret';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Pejzaž';
$app_list_strings['LBL_REPORTS_RESTRICTED'] = 'A report you have selected is targeting a module you do not have access to. Please select a report with a target module you have access to.';
