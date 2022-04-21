Set oShell = CreateObject ("Wscript.Shell") 
Dim strArgs
strArgs = "cmd /c php_artisan.bat"
oShell.Run strArgs, 0, false