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
	"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fhenry.com%2Fimages%2Froofing%2FIMG-Pro-Grade-155-Flashing-Cement-5GAL-PG155.jpg&f=1&nofb=1"
];

shuffle($links);

header("Content-Type: application/json");

echo json_encode(["link" => $links[0]]);
