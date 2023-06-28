![License: AGPL v3](https://img.shields.io/badge/License-AGPL_v3-blue.svg)<HR>
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

Do NOT, I repeat do NOT use this code.  This is nowhere near done.
This is what you're looking for:
[eseye](https://github.com/eveseat/eseye)

Savepoint for eveSI v0.0.01a
-preAlpha code in developement

<b>DRAFT [Yes this is GPT4 writing what this program is ; waste of time to do this myself atm. it's great for grunt work if you can prompt it properly.]<br/>
At the base of the hierarchy is the eveSI class, which contains the core functionality for making API requests (_esiRequestHandler). This base class is extended by various endpoint classes (like alliances_endpoints, characters_endpoints, etc.) each representing a specific API endpoint. These endpoint classes encapsulate the specifics of interacting with their respective API endpoints while inheriting the basic request functionality from the eveSI class.

Some of these endpoint classes are further extended by more specific classes that represent different request handlers for the endpoints (like getAlliancesContacts, getAlliancesCorporations, etc.). These classes provide specific methods for fetching and interacting with data from their respective endpoints.

At the top of the hierarchy, there's a generalized data handler class (_esiDataHandler) that handles the conversion of JSON response data into a selected data type for all requests. This class abstracts away the details of data conversion, allowing other parts of the program to interact with the API data without concerning themselves with how the data is converted.

This organization of classes into a hierarchy allows for code reuse through inheritance, encapsulates specific functionality within dedicated classes, and abstracts away lower-level details, making the program easier to understand and maintain. It follows the principles of object-oriented design, including encapsulation, inheritance, and polymorphism.</b>

NOTICE!
You might want to avoid using this package at the moment.

This code is extremly unstable, incomplete, full of bugs, and probably won't work at all yet.

This respository was set up so I could click on everything and learn GitHub features rapidly as I make this program.

However, if you are still going to download this: _esiRequestHandler is the base class file you want to start looking at.
Which is shown in the plantUML file (also incomplete, and wrong)
