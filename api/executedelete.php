<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.4   |
    |              on 2019-04-29 22:23:40              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 goto Ffb44c905f3bfa852239804d48d2a125; B38775c41dbca1487ef6e59453e86e6f: sleep($retry); goto cca706356922f79d0e53af951939c5cf; adec59ffb44d9f6ecee1173a0519b9a6: $newtime = "\61\x30\60"; goto E751560ec645db7a08217d6ec75bdd0f; cca706356922f79d0e53af951939c5cf: mysqli_query($link, "\x64\x65\x6c\x65\164\145\x20\x66\x72\157\155\x20\x6d\171\137\163\151\147\156\141\x6c\163\x3b"); goto D10c1c10ab0463338eee218d02155950; ef29d8ea4ec1b2a1a435a906b47f24c1: $x = "\x53\x45\114\105\103\124\x20\52\40\x46\122\117\115\40\x6d\171\137\163\x65\x74\x74\151\156\x67\163\40\x57\x48\105\122\105\40\x72\x65\143\156\x6f\x3d\61"; goto B3c7414a03cfb4a7a766022bc4783df0; Bc7a81b9b3229329517978f4033e6cd5: $link = mysqli_connect("\x31\62\67\56\x30\56\x30\x2e\x31", "\x6c\x70\x62\160\151\x73\157\167\x69\146\x69", "\116\x6b\156\x63\161\166\123\66\x76\x54\153\x46\61\102\124\x73", "\x72\x70\151\x5f\167\x69\146\x69"); goto ef29d8ea4ec1b2a1a435a906b47f24c1; Ffb44c905f3bfa852239804d48d2a125: $token_file = "\x2f\166\141\x72\57\x77\167\167\x2f\x68\x74\155\x6c\57\x7a\x78\143\166\x2e\141\x73\144"; goto Bc7a81b9b3229329517978f4033e6cd5; B3c7414a03cfb4a7a766022bc4783df0: $getit = mysqli_query($link, $x); goto caa03aaea12327f40386f1fd74631dbc; E751560ec645db7a08217d6ec75bdd0f: $retry = $row["\151\x6e\163\145\162\164\x77\151\x6e\144\x6f\167\x74\x69\x6d\x65"] + $newtime; goto B38775c41dbca1487ef6e59453e86e6f; caa03aaea12327f40386f1fd74631dbc: $row = mysqli_fetch_array($getit); goto adec59ffb44d9f6ecee1173a0519b9a6; D10c1c10ab0463338eee218d02155950: unlink($token_file);