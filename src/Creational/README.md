# Létrehozási minták

## Factory Method
A Factory Method egy olyan létrehozási minta, melynek célja, hogy a példányosítás logikáját a subclass-okra bízza. 
A subclassok egy superclassból, abstract classból vagy interface-ből merítik a létrehozási metódust, mely egy 
általános interface-t ad meg visszatérési értéknek, melyet Product Interface-nek nevezünk.

## Abstract Factory
Az Abstract Factory ugyancsak egy létrehozási minta, és célja, hogy olyan object-eket példányosítson, melyek
egymással kapcsolatban állnak, illetve valamilyen logika mentén egyfajta objektumcsaládot alkotnak.

## Builder
A Builder egy olyan létrehozási minta, amivel komplex object-eket lehet létrehozni anélkül, hogy bonyolult és csúnya
class constructorokat kellene használni. Ezt úgy éri el, hogy ezeket a lépéseket külön metódusokra bontja, 
ezzel mellékesen elérve, hogy különböző típusú és reprezentációjú változatokat lehessen az object-ből létrehozni.
A gyakran ismétlődő konfigurációkat ki lehet szervezni egy ún. Director class-ba, mely ezen összeállításokat külön metódusokba
rendezi, növelve az újrafelhasználhatóságát a kódnak. A létrehozott object-ek lehetnek Immutable és Mutable Object-ek, ez
az adott specifikációtól függ.