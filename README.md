
QUESTIONS
F1. Ibinigay ng lesson na ito ang authentication, ibig sabihin napatunayan natin kung sino ang user sa pamamagitan ng login, logout, register, at auth middleware. Ang kulang pa sa susunod na meeting ay authorisation, ibig sabihin kung ano lang ang pinapayagang gawin ng naka-login na user, tulad ng roles o policies.

F2. Tinatawag ang session()->regenerate() pagka-login para gumawa ng bagong session ID, kasi kung hindi, pwedeng magamit ng attacker ang lumang session ID para maging ikaw (session fixation).

F3. Iisa ang message sa maling password at unknown email para hindi malaman ng umaatake kung may account na naka-register sa isang email (user enumeration).

F4. Public ang index at show kasi nagbabasa lang sila ng data, habang protected ng auth ang create, edit, update, at destroy kasi nagbabago sila ng data at dapat kilala ang gagawa nito.

F5. Hindi sapat ang pagtatago ng buttons para sa guest kasi cosmetic lang ito at pwede pa ring i-type ang URL o magpadala ng direktang request, kaya ang auth middleware sa server ang tunay na pumipigil sa estranghero

F6. Kailangang eksaktong login ang pangalan ng route kasi tinatawag ng auth middleware ang route('login') para malaman kung saan ire-redirect ang guest, at kapag wala ito, mag-e-error ng Route [login] not defined