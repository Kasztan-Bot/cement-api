<?php

$links = [
	"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.Dd-VGtM6uJdIfZ-o450roQHaLH%26pid%3DApi&f=1",
	"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.stockportfencing.co.uk%2Fwp-content%2Fuploads%2F2016%2F11%2Fs202.jpg&f=1&nofb=1",
	"https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fngmblocks.com%2Fwp-content%2Fuploads%2F2017%2F08%2F3-Cement-Bags-2.jpg&f=1&nofb=1",
	"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2F6%2F62%2FPortland_Cement_Bags.jpg%2F1200px-Portland_Cement_Bags.jpg&f=1&nofb=1",
	"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fg.foolcdn.com%2Feditorial%2Fimages%2F444988%2Fmixing-cement.jpg&f=1&nofb=1",
	"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcolombiareports.com%2Fwp-content%2Fuploads%2F2017%2F12%2Fcement.jpg&f=1&nofb=1",
	"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.ilNpR_6KThAoa1xFIBg4pAHaEK%26pid%3DApi&f=1",
	"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn.dnaindia.com%2Fsites%2Fdefault%2Ffiles%2Fstyles%2Ffull%2Fpublic%2F2018%2F01%2F17%2F642579-cement-011718.jpg&f=1&nofb=1",
	"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.5g3EXFsEtiHOp_8yowB8IwHaCa%26pid%3DApi&f=1",
	"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fpixfeeds.com%2Fimages%2F26%2F556103%2F1200-501068684-cement-mixing.jpg&f=1&nofb=1",
	"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fhenry.com%2Fimages%2Froofing%2FIMG-Pro-Grade-155-Flashing-Cement-5GAL-PG155.jpg&f=1&nofb=1",
	"https://www.abud.pl/pol_pl_Cement-Portlandzki-I-42-5-N-Energo-Bet-25kg-44062_1.jpg",
	"https://kim24.pl/userdata/public/gfx/20208/Cement-workowany-Lafarge-Specjal.jpg",
	"https://3.allegroimg.com/s512/034c13/041687db4358889dfd52ad8cb7e3/CEMENT-PORTLANDZKI-CEM-II-32-5-R-dyckerhoff-25kg",
	"https://dombud.eu/1402-home_default/cement-workowany-325-worek-25kg-paleta-56-workow-1400kg.jpg",
	"https://thumbs.img-sprzedajemy.pl/1000x901c/8a/3e/94/cement-szary-portlandzki-100-425r-cem-528231381.jpg",
	"https://www.wibud.com.pl/zdjecia/cement-portlandzki.jpg",
	"https://www.mgprojekt.com.pl/blog/wp-content/uploads/2018/12/cement-portlandzki-wieloskladnikowy.jpg",
	"https://budujesz.info/pliki/image/foto/duze/plik4f646b42d0029.jpg",
	"https://ocdn.eu/pulscms-transforms/1/9hfktkuTURBXy81YWQyOTgyOS01MTc2LTQ2NWMtOTY0Ny0wYTEyYTQyMmE4ZTUuanBlZ5GTBc0EsM0CpA",
	"http://static.e-sciany.pl/art/10778_huge.jpg",
	"https://www.portal-budowlany24.pl/wp-content/uploads/budowa/cechy-cementu-glinowego.jpg",
	"https://receptynadom.pl/wp-content/uploads/2017/09/cement_oznaczenia_SPC_10_2017_Fot_2.jpg",
	"http://www.gorka.com.pl/img/g40.jpg",
	"https://www.fajnachata.net/files/95218B74-1EBF-43EA-BDEC-13A933F50DB2.jpeg",
	"https://taniskladbudowlany.pl/wp-content/uploads/2018/11/cement.jpg",
	"https://media.castorama.pl/media/catalog/product/cache/0/image/9df78eab33525d08d6e5fb8d27136e95/C/e/Cement_bialy_Cekol_5_kg-919243-85590.jpg"
];

shuffle($links);

header("Content-Type: application/json");

echo json_encode(["link" => $links[0]]);
