# Strukturális minták

## Adapter
Az Adapter egy strukturális minta, melynek segítségével olyan objektumokat lehet együttműködésre bírni,
vagy ezen objektumokat felcserélhetővé alakítani, melyek interface-ei inkompatibilisek egymással.

## Bridge
A Bridge egy olyan minta, mellyel nagyobb class-okat, vagy szorosan összetartozó class-okat két nagy, 
szeparált hierarchiára lehet bontani: absztrakcióra és implementációra. Miután ezen class-ok külön lettek 
választva, egymástól függetlenül lehet őket fejleszteni. Míg az implementációs réteg low-level műveleteket deklarál, 
addig az absztrakciós réteg ezen low-level műveletekből komponál high-level funkciókat. 
A rétegek egymástól függetlenül cserélhetőek.