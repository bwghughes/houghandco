<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
| 	www.your-site.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['scaffolding_trigger'] = 'scaffolding';
|
| This route lets you set a "secret" word that will trigger the
| scaffolding feature for added security. Note: Scaffolding must be
| enabled in the controller in which you intend to use it.   The reserved 
| routes must come before any wildcard or regular expression routes.
|
*/

$route['default_controller'] = "Home";
$route['scaffolding_trigger'] = "Uvr49BnTwj28Xc9FGbtq64HZs7Q5rWHfo86Sx6FfDtUW9k34";
$route['professional-services'] = "professionalservices";
$route['professional-services/building-surveys'] = "professionalservices/buildingsurveys";
$route['professional-services/sulphate-reports'] = "professionalservices/sulphatereports";
$route['professional-services/landlord-and-tenant'] = "professionalservices/landlordandtenant";
$route['professional-services/asbestos'] = "professionalservices/asbestos";
$route['professional-services/party-wall'] = "professionalservices/partywall";
$route['professional-services/single-issue-defect'] = "professionalservices/singleissuedefect";
$route['professional-services/legal-disputes'] = "professionalservices/legaldisputes";
$route['auction-services'] = "auctionservices";
$route['auction-services/auction-dates'] = "auctionservices/auctiondates";
$route['auction-services/enter-property'] = "contactus";
$route['auction-services/estate-agents'] = "auctionservices/estateagents";
$route['auction-services/auction-catalogue'] = "auctionservices/auctioncatalogue";
$route['auction-services/auction-catalogue/:num'] = "auctionservices/auctioncatalogue";
$route['auction-services/auction-venue'] = "auctionservices/auctionvenue";
$route['auction-services/auction-results'] = "auctionservices/auctionresults";
$route['auction-services/auction-administration'] = "auctionservices/auctionadministration";
$route['auction-services/auction-pdf-catalogue'] = "auctionservices/auctionpdf";
$route['contact-us'] = "contactus";
$route['help'] = "help";
?>