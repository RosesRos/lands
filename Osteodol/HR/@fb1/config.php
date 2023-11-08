<?php
/* Templates */
$app_name   = 'Vili Beroš';
$home       = 'Glavna stranica';
$page_type  = 'Javna osoba';
$like       = 'Sviđa mi se';
$comment    = 'Dođi';
$share      = 'Udio';
$contact    = 'Kontaktirajte nas';

/* Form */
$name           = 'Ime';
$phone          = 'Telefon';
$order          = 'Narudžbe';
$discount       = 'Popusti';
$timeleft       = 'preostalo vrijeme';
$hours          = 'sat';
$minutes        = 'minuta';
$seconds        = 'trenutak';
$example        = 'primjer';
$example_name   = 'Volchek Radomir';
$example_phone  = '+385 XXXXXXXX';
$currency       = 'HRK';
$price_old      = '599,80';
$price_new      = '299.90';
$protection     = 'Ne brinite, kuriri uvijek mijenjaju maske i rukavice. Kontakt i plaćanje bez kontakta.';


/* Comments */
$data_now   = 'Upravo sad';
$answer     = 'Odgovor';
$yet        = 'Opet';
$answered   = 'odgovor';
$respue     = 'odgovor';
$respues    = 'odgovor';
$hours      = 's.';

/* Data */
$date = [
    'Siječnja',
    'Veljača',
    'Ožujak',
    'Travanj',
    'Svibanj',
    'Lipanj',
    'Srpanj',
    'Kolovoz',
    'Rujan',
    'Listopad',
    'Studeni	',
    'Prosinac'
];

$month = date('n') - 1;
$d = date('d') . ' ' .$date[$month] .' '. date('Y') . ' sat 09:23';
