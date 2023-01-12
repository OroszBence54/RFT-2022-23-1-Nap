# Adatbázis magyarázat:

### news:

- id = Hír azonosító (elsődleges kulcs)
- title = Hír címe
- type = Hír típusa (idegen kulcs)
- description = Hír szövege
- image = Hír kép linkje.
- created_at = Hír létrehozás dátuma

### news_types:

- id = Típus azonosító (elsődleges kulcs)
- name = Típus neve (Belföld, Külföld, Oktatás, Sport stb..)

(A news.type és a news_types.id egy a többhöz kapcsolatban állnak)

### users:

- id = Felhaszn. azonosító (elsődleges kulcs)
- first_name = Vezetéknév
- last_name = Keresztnév
- email = E-mail cím
- password = Hash titoksítással védett jelszó
- role_id = Felhasználó típusa (idegen kulcs)
- created_at = Felhasználó létrehozásának dátuma

### roles:

- id = jogosultság azonosítója (elsődleges kulcs)
- name = jogosultság neve (Felhasználó, Adminisztrátor, Moderátor stb..)

(A users.role_id és a roles.id egy a többhöz kapcsolatban állnak)

### permissions:

- id = engedély azonosítója (elsődleges kulcs)
- name = engedély neve (Hírek létrehozása, Hírek szerkesztése, Felhasználó hozzáadása stb..)

A roles és a permissions tábla TÖBB A TÖBBHÖZ kapcsolatban állnak.

Ez azért van, mert a jogosultságok több engedéllyel rendelkezhetnek, és az engedélyek is több jogosultsághoz
tartozhatnak.

Ehhez szükség van egy összekötő táblára:

### role_permissions (kapcsoló tábla):

- id = kapcsoló azonosító (elsődleges kulcs)
- role_id = jogosultság azonosítója (idegen kulcs)
- permission_id = engedély azonosítója (idegen kulcs)


## Kapcsolatok:

- A news.type és a news_types.id egy a többhöz kapcsolatban állnak
- A users.role_id és a roles.id egy a többhöz kapcsolatban állnak
- A roles és a permissions tábla több a többhöz kapcsolatban állnak.
