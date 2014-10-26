<span id="top"></span>
Coding
======

### From modwiki

Jump to: [navigation](/wiki/Coding#column-one), [search](/wiki/Coding#searchInput)

[What's this?](/wiki/Help:Reference_box "Help:Reference box")

**Coding quick reference**

------------------------------------------------------------------------

<span style="font-size: 14px"> </span>
-   [How to build the SDK on Linux](/wiki/How_to_build_the_SDK_on_Linux "How to build the SDK on Linux")
-   [How to build the SDK on OSX](/wiki/How_to_build_the_SDK_on_OSX "How to build the SDK on OSX")
-   [How to build the SDK on Windows](/wiki/How_to_build_the_SDK_on_Windows "How to build the SDK on Windows")

All engines in the [id Tech 4](/wiki/Id_Tech_4 "Id Tech 4") family are written in C++, a high-level programming language. Coding, as it applies to id Tech 4 games, is the modification of the engine's public source code to extend upon its capabilities.

<table>
<colgroup>
<col width="100%" />
</colgroup>
<tbody>
<tr class="odd">
<td align="left"><div id="toctitle">
<h2>Contents</h2>
</div>
<ul>
<li><a href="/wiki/Coding#Engine_code"><span class="tocnumber">1</span> <span class="toctext">Engine code</span></a></li>
<li><a href="/wiki/Coding#Game_code"><span class="tocnumber">2</span> <span class="toctext">Game code</span></a></li>
<li><a href="/wiki/Coding#The_SDK"><span class="tocnumber">3</span> <span class="toctext">The SDK</span></a></li>
<li><a href="/wiki/Coding#Where_to_start"><span class="tocnumber">4</span> <span class="toctext">Where to start</span></a></li>
<li><a href="/wiki/Coding#References"><span class="tocnumber">5</span> <span class="toctext">References</span></a></li>
<li><a href="/wiki/Coding#Coding_tutorials"><span class="tocnumber">6</span> <span class="toctext">Coding tutorials</span></a></li>
<li><a href="/wiki/Coding#Coding_Tools"><span class="tocnumber">7</span> <span class="toctext">Coding Tools</span></a></li>
</ul></td>
</tr>
</tbody>
</table>

[[edit](/w/index.php?title=Coding&action=edit&section=1 "Edit section: Engine code")]

Engine code
-----------

The engine code is available on a GPL v3 licence at [[[1]](/web/20120831010417/https://github.com/TTimo/doom3.gpl "https://github.com/TTimo/doom3.gpl")]

Among other systems, the engine contains - the common framework, renderer, sound system, file system, network system.

The compiled engine code is referred to as the engine executable.

[[edit](/w/index.php?title=Coding&action=edit&section=2 "Edit section: Game code")]

Game code
---------

Game code can be downloaded as part of the respective games SDK and is released under the SDK EULA.

Among other systems, the game code contains - the main game logic, map loading, entity spawning, spawn classes, physics, networking.

The compiled game code is referred to as the game binary. People often refer to the game code and the game binary interchangeably, also using such terms as the dll, or the SDK.

The engine/game interface, or API, is described by idGame with local aspects in idGameLocal.

There is version check done by the game engine on loading the game binary in order to enforce the API which halts the game with the error "ERROR: wrong game DLL API version". Therefore each engine update or game patch is likely to 'break' compatibility of mods, necessitating the author to update the mod to the new game code.

During development it can be handy to set[si\_pure](/wiki/Si_pure_%28cvar%29 "Si pure (cvar)") to 0. This makes it possible to run the game with a modified game binary placed directly in the base directory. However, once you've finished making your code changes you should package the modified game binary for distribution as described in the *how to* articles linked at the top of this page.

For more details on each file and class included in the SDK, and therefore what can and cannot be done, please read [The annotated API](/wiki/The_annotated_API "The annotated API").

[[edit](/w/index.php?title=Coding&action=edit&section=3 "Edit section: The SDK")]

The SDK
-------

This game code project in the SDK, allows modders the ability to compile a new game binary for different platforms - gamex86.dll/gamex86.so/gameppc.dylib file for windows/linux/mac respectively.

-   Download the [Doom 3 SDK](/web/20120831010417/ftp://ftp.idsoftware.com/idstuff/doom3/source/ "ftp://ftp.idsoftware.com/idstuff/doom3/source/") version 1.3.1
-   Download the [Quake 4 SDK](/web/20120831010417/ftp://ftp.idsoftware.com/idstuff/quake4/source "ftp://ftp.idsoftware.com/idstuff/quake4/source") version 1.4.2
-   Download the [Prey SDK](/web/20120831010417/http://www.3drealms.com/prey/download.html#sdk "http://www.3drealms.com/prey/download.html#sdk")
-   Download the [ETQW SDK](/web/20120831010417/http://community.enemyterritory.com/index.php?q=node/262 "http://community.enemyterritory.com/index.php?q=node/262") version 1.5

Most of the SDKs support Visual Studio .NET 2003 and 2005 "out of the box".

[[edit](/w/index.php?title=Coding&action=edit&section=4 "Edit section: Where to start")]

Where to start
--------------

So much code!

As a starting point the idGameLocal::RunFrame() function can be considered the entry point or the systems "main()".

It is the part of the game loop called by the engine at 60Hz (30Hz for ETQW). Each call referred to as a [game frame](/w/index.php?title=Game_frame&action=edit "Game frame").

The idGameLocal class handles main game aspects, loading map, setting up the main data structures, spawning and tracking [entities](/wiki/Entity "Entity").

idEntity is the base [spawn class](/wiki/Spawn_class "Spawn class") that other entities are derived from.

[[edit](/w/index.php?title=Coding&action=edit&section=5 "Edit section: References")]

References
----------

-   [The annotated API](/wiki/The_annotated_API "The annotated API")
-   [CVar flags](/w/index.php?title=CVar_flags&action=edit "CVar flags") (Description of the flags)
-   [Server query protocol](/wiki/Server_query_protocol "Server query protocol")

[[edit](/w/index.php?title=Coding&action=edit&section=6 "Edit section: Coding tutorials")]

Coding tutorials
----------------

-   [Adding a custom keyhandler](/wiki/Adding_a_custom_keyhandler "Adding a custom keyhandler")
-   [Beginner's Tutorial (Part 1) Filetypes](/wiki/Beginner%27s_Tutorial_%28Part_1%29_Filetypes "Beginner's Tutorial (Part 1) Filetypes")
-   [Beginner's Tutorial (Part 2) The SDK](/wiki/Beginner%27s_Tutorial_%28Part_2%29_The_SDK "Beginner's Tutorial (Part 2) The SDK")
-   [How to build the SDK on Linux](/wiki/How_to_build_the_SDK_on_Linux "How to build the SDK on Linux")
-   [How to build the SDK on OSX](/wiki/How_to_build_the_SDK_on_OSX "How to build the SDK on OSX")
-   [How to build the SDK on Windows](/wiki/How_to_build_the_SDK_on_Windows "How to build the SDK on Windows")
-   [How to add custom console commands](/wiki/How_to_add_custom_console_commands "How to add custom console commands")
-   [How to add CVar's](/wiki/How_to_add_CVar%27s "How to add CVar's")
-   [Rendering with the D3 renderengine](/wiki/Rendering_with_the_D3_renderengine "Rendering with the D3 renderengine")
-   [D3 Networking: Basics](/wiki/D3_Networking:_Basics "D3 Networking: Basics")
-   [D3 Networking: Communication](/wiki/D3_Networking:_Communication "D3 Networking: Communication")
-   [D3 Networking: Setting up a test session](/wiki/D3_Networking:_Setting_up_a_test_session "D3 Networking: Setting up a test session")
-   [D3 Networking: Snapshot synchronisation](/w/index.php?title=D3_Networking:_Snapshot_synchronisation&action=edit "D3 Networking: Snapshot synchronisation")
-   [D3 Networking: Server and client side events](/w/index.php?title=D3_Networking:_Server_and_client_side_events&action=edit "D3 Networking: Server and client side events")
-   [D3 Networking: Server- and UserInfo](/w/index.php?title=D3_Networking:_Server-_and_UserInfo&action=edit "D3 Networking: Server- and UserInfo")
-   [D3 Networking: A birth and death of an entity](/w/index.php?title=D3_Networking:_A_birth_and_death_of_an_entity&action=edit "D3 Networking: A birth and death of an entity")
-   [D3 Networking: An overview of the architecture](/w/index.php?title=D3_Networking:_An_overview_of_the_architecture&action=edit "D3 Networking: An overview of the architecture")
-   [D3 Networking: Delta and PVS-based synchronisation](/w/index.php?title=D3_Networking:_Delta_and_PVS-based_synchronisation&action=edit "D3 Networking: Delta and PVS-based synchronisation")
-   [D3 Networking: Client-side prediction](/w/index.php?title=D3_Networking:_Client-side_prediction&action=edit "D3 Networking: Client-side prediction")
-   [Q4 Networking: Encoding messages like snapshots](/w/index.php?title=Q4_Networking:_Encoding_messages_like_snapshots&action=edit "Q4 Networking: Encoding messages like snapshots")
-   [Q4 Networking: Deltifying rockets away](/w/index.php?title=Q4_Networking:_Deltifying_rockets_away&action=edit "Q4 Networking: Deltifying rockets away")

[[edit](/w/index.php?title=Coding&action=edit&section=7 "Edit section: Coding Tools")]

Coding Tools
------------

-   [MS Visual C++ Beta](/web/20120831010417/http://lab.msdn.microsoft.com/express/visualc/default.aspx "http://lab.msdn.microsoft.com/express/visualc/default.aspx") - [Installation Notes](/web/20120831010417/http://www.doom3world.org/phpbb2/viewtopic.php?p=57046 "http://www.doom3world.org/phpbb2/viewtopic.php?p=57046")

Retrieved from "[http://www.modwiki.net/wiki/Coding](/wiki/Coding)"

[Category](/w/index.php?title=Special:Categories&article=Coding "Special:Categories"): <span dir="ltr">[Coding](/wiki/Category:Coding "Category:Coding")</span>

------------------------------------------------------------------------

[Modwiki](/wiki/Category:Modwiki "Category:Modwiki") \> [Coding](/wiki/Category:Coding "Category:Coding")

##### Views

-   

    [Article](/wiki/Coding)
-   

    [Discussion](/wiki/Talk:Coding)
-   

    [Edit](/w/index.php?title=Coding&action=edit)
-   

    [History](/w/index.php?title=Coding&action=history)

##### Personal tools

-   

    [Log in / create account](/w/index.php?title=Special:Userlogin&returnto=Coding)

[](/wiki/Main_Page "Main Page")

##### Main

-   

    [Main Page](/wiki/Main_Page)

##### id Tech 4

-   

    [Doom 3](/wiki/Doom_3)
-   

    [Quake 4](/wiki/Quake_4)
-   

    [Prey](/wiki/Prey)
-   

    [ETQW](/wiki/Enemy_Territory:_Quake_Wars)
-   

    [Wolfenstein](/wiki/Wolfenstein)

##### id Tech 5

-   

    [Rage](/wiki/Rage)
-   

    [Doom 4](/wiki/Doom_4)

##### Quick Links

-   

    [Console](/wiki/Console)
-   

    [Script Events](/wiki/Scripting)
-   

    [Material Keywords](/wiki/Material_%28decl%29)
-   

    [Modification List](/wiki/Modlist)
-   

    [Tutorial List](/wiki/Tutorial_list)

##### Wiki

-   

    [Open tasks](/wiki/modwiki:Open_tasks)
-   

    [Recent changes](/wiki/Special:Recentchanges)
-   

    [Style guide](/wiki/modwiki:Style_guide)
-   

    [Help](/wiki/Help:Contents)

##### Search

 

##### Toolbox

-   

    [What links here](/wiki/Special:Whatlinkshere/Coding)
-   

    [Related changes](/wiki/Special:Recentchangeslinked/Coding)
-   

    [Upload file](/wiki/Special:Upload)
-   

    [Special pages](/wiki/Special:Specialpages)
-   

    [Printable version](/w/index.php?title=Coding&printable=yes)
-   

    [Permanent link](/w/index.php?title=Coding&oldid=26283)

[![MediaWiki](/w/skins/common/images/poweredby_mediawiki_88x31.png)](/web/20120831010417/http://www.mediawiki.org/)

[![GNU Free Documentation License 1.2](/w/skins/common/images/gnu-fdl.png)](/web/20120831010417/http://www.gnu.org/copyleft/fdl.html)

-   

    This page was last modified 23:15, 23 November 2011.
-   

    Content is available under [GNU Free Documentation License 1.2](/web/20120831010417/http://www.gnu.org/copyleft/fdl.html "http://www.gnu.org/copyleft/fdl.html").
-   

    [Privacy policy](/wiki/modwiki:Privacy_policy "modwiki:Privacy policy")
-   

    [About modwiki](/wiki/modwiki:About "modwiki:About")
-   

    [Disclaimers](/wiki/modwiki:General_disclaimer "modwiki:General disclaimer")


