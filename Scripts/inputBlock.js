document.getElementById('name').onkeydown = function (e) {return !(/^^[ 0-9:-@!-/[-`{-}~]$$/.test(e.key));}
document.getElementById('phone').onkeydown = function (e) {return !(/^^[ А-Яа-яA-Za-z:-@!-/[-`{-}~]$$/.test(e.key));}
document.getElementById('mail').onkeydown = function (e) {return !(/^^[ &=+<>,_' -- ]$$/.test(e.key));}