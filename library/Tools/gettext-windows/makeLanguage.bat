@echo off

echo English version...
cd bin
dir /s /b ..\..\..\..\*.php > ..\list.txt
dir /s /b ..\..\..\..\*.phtml >> ..\list.txt
xgettext --keyword=tr -f ..\list.txt -o ..\temp.en.po --language=PHP --from-code=UTF-8
if exist "..\..\..\..\application\languages\lang.en.po" msgmerge.exe ..\..\..\..\application\languages\lang.en.po ..\temp.en.po > ..\..\..\..\application\languages\lang.en.new.po
if not exist "..\..\..\..\application\languages\lang.en.po" copy ..\temp.en.po ..\..\..\..\application\languages\lang.en.new.po
del ..\temp.en.po
if exist "..\..\..\..\application\languages\lang.en.po" del ..\..\..\..\application\languages\lang.en.po
rename ..\..\..\..\application\languages\lang.en.new.po lang.en.po

echo French version...
xgettext --keyword=tr -f ..\list.txt -o ..\temp.fr.po --language=PHP --from-code=UTF-8
if exist "..\..\..\..\application\languages\lang.fr.po" msgmerge.exe ..\..\..\..\application\languages\lang.fr.po ..\temp.fr.po > ..\..\..\..\application\languages\lang.fr.new.po
if not exist "..\..\..\..\application\languages\lang.fr.po" copy ..\temp.fr.po ..\..\..\..\application\languages\lang.fr.new.po
del ..\temp.fr.po
if exist "..\..\..\..\application\languages\lang.fr.po" del ..\..\..\..\application\languages\lang.fr.po
rename ..\..\..\..\application\languages\lang.fr.new.po lang.fr.po

del ..\list.txt
cd ..