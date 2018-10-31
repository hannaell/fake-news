<?php
declare(strict_types=1);
// This is the file where you can keep your data arrays such as articles and
// authors.

// Array for authors names and the authors IDs.
$authors = [
    ['name' => 'Voldemort', 'id' => 1, 'img' => 'img/Voldemort.jpg'],
    ['name' => 'Lois Lane', 'id' => 2, 'img' => 'img/LoisLane.jpg'],
    ['name' => 'Edward Blom', 'id' => 3, 'img' => 'img/EdwardBlom.jpg'],
    ['name' => 'Scooby Doo', 'id' => 4, 'img' => 'img/ScoobyDoo.jpg'],
    ['name' => 'Black Beard', 'id' => 5, 'img' => 'img/BlackBeard.jpg'],
];


// Array for articles. En variant.
$articles = [
    [
        'title' => 'The True Harry Potter Story',
        'content' => 'Squashy armchairs dirt on your nose brass scales crush the
        Sopophorous bean with flat side of silver dagger, releases juice better
        than cutting. Full moon Whomping Willow three turns should do it lemon
        drops. Locomotor trunks owl treats that will be 50 points, Mr. Potter.
        Witch Weekly, he will rise again and he will come for us, headmaster
        Erumpent horn. Fenrir Grayback horseless carriages ‘zis is a chance many
        would die for! <br>
        <br>
        Red hair crookshanks bludger Marauder’s Map Prongs sunshine daisies butter
        mellow Ludo Bagman. Beaters gobbledegook N.E.W.T., Honeydukes eriseD inferi
        Wormtail. Mistletoe dungeons Parseltongue Eeylops Owl Emporium expecto
        patronum floo powder duel. Gillyweed portkey, keeper Godric’s Hollow
        telescope, splinched fire-whisky silver Leprechaun O.W.L. stroke the spine.
        Chalice Hungarian Horntail, catherine wheels Essence of Dittany Gringotts
        Harry Potter. Prophecies Yaxley green eyes Remembrall horcrux hand of the
        servant. Devil’s snare love potion Ravenclaw, Professor Sinistra
        time-turner steak and kidney pie. Cabbage Daily Prophet letters from no one
        Dervish and Banges leg. <br>
        <br>
        Toad-like smile Flourish and Blotts he knew I’d come back Quidditch World
        Cup. Fat Lady baubles banana fritters fairy lights Petrificus Totalus. So
        thirsty, deluminator firs’ years follow me 12 inches of parchment. Head Boy
        start-of-term banquet Cleansweep Seven roaring lion hat. Unicorn blood
        crossbow mars is bright tonight, feast Norwegian Ridgeback. Come seek us
        where our voices sound, we cannot sing above the ground, Ginny Weasley
        bright red. Fanged frisbees, phoenix tears good clean match.',
        'author' => 'Voldemort',
        'publishedDate' => '2018-10-17',
        'likeCounter' => 28,
        'img' => 'img/HarryPotter.jpg',
    ],
    [
        'title' => 'How Batman Spent His Christmas',
        'content' => 'There is a prison in a more ancient part of the world. A pit
        where men are thrown to suffer and die. But sometimes a man rises from the
        darkness. Sometimes, the pit sends something back. <br>
        Your anger gives you great power. But if you Iet it, it will destroy you as
        it almost did me. <br>
        <br>
        Let me get this straight. You think that your client, one of the
        wealthiest, most powerful men in the world is secretly a vigilante who
        spends his nights beating criminals to a pulp with his bare hands and your
        plan is to blackmail this person? Good luck. <br>
        <br>
        You wanna know how I got them? So I had a wife. She was beautiful, like
        you, who tells me I worry too much, who tells me I ought to smile more, who
        gambles and gets in deep with the sharks. Hey. One day they carve her face.
        And we have no money for surgeries. She can\'t take it. I just wanna see
        her smile again. I just want her to know that I don\'t care about the
        scars. So, I do this to myself. And you know what? She can\'t stand the
        sight of me. She leaves. Now I see the funny side. Now I\'m always
        smiling. <br>
        <br>
        The first time I stole so that I wouldn\'t starve, yes. I lost many
        assumptions about the simple nature of right and wrong. And when I traveled
        I learned the fear before a crime and the thrill of success. But I never
        became one of them. <br>
        <br>
        How can you move faster than possible, fight longer than possible, without
        the most powerful impulse of the spirit? The fear of death. <br>
        Breathe in your fears. Face them. To conquer fear, you must become fear.
        You must bask in the fear of other men. And men fear most what they cannot
        see. You have to become a terrible thought. A wraith. You have to become an
        idea! Feel terror cloud your senses. Feel its power to distort. To control.
        And know that this power can be yours. Embrace your worst fear. Become one
        with the darkness.',
        'author' => 'Lois Lane',
        'publishedDate' => '2015-12-28',
        'likeCounter' => 137,
        'img' => 'img/Batman.jpg',
    ],
    [
        'title' => 'Deadpools Taughts Is Just The Same As Ever',
        'content' => 'Due to many complaints about a white man not being portrayed
        as a villian, we put a fucking British guy instead. Somebody forgot to put
        a black guy here...oops. Lorem ipsum is officially my bitch! If an ugly
        fuck like me can get his girl to still him, you can also find love. Just
        kidding! the real world is a cruel place. If your gf/bf hated you for
        watching deadpool instead of doing something special, I\'m glad you dumped
        them. Deadpool has now infiltrated the web, I shall now try to find where
        that wimp spidey is hiding...and take him out.. to dinner I know my costume
        looks really familiar to spidey\'s but he can only spray out sticky liquid
        with his hands and cry. I know my costume looks really familiar to
        spidey\'s but he can only spray out sticky liquid with his hands and
        cry. <br>
        <br>
        You need more words? Here you go: Fuck, balls, ass, dick, tits! Lorem
        ipsum.. what the fuck is that?? Who says I can\'t wryte!? People ask me why
        Spidey also wears red, that\'s because he\'s my bitch. Stop looking for a
        deep moral lesson in the Deadpool movies, the only thing you need to learn
        is that you never kick a silver hulk in the nuts. <br>
        <br>
        Lorem ipsum is officially my bitch! If your gf/bf hated you for watching
        deadpool instead of doing something special, I\'m glad you dumped them.
        Lorem ipsum sounds something Loki would say in his dying breath. Probably
        means "Fuck me". Lorem ipsum is officially my bitch! It’s not that I hate
        wolverine, it’s just that If we’re both in a desert and I have a glass of
        water, I’m going to drink it and pee on his bitch face. I\'m a smart ass
        with a great ass. Beat that Superman.',
        'author' => 'Lois Lane',
        'publishedDate' => '2007-03-20',
        'likeCounter' => 75,
        'img' => 'img/Deadpool.jpg',
    ],
    [
        'title' => 'How I, Voldemort, took over the world!',
        'content' => 'Red hair crookshanks bludger Marauder’s Map Prongs sunshine
        daisies butter mellow Ludo Bagman. Beaters gobbledegook N.E.W.T.,
        Honeydukes eriseD inferi Wormtail. Mistletoe dungeons Parseltongue Eeylops
        Owl Emporium expecto patronum floo powder duel. Gillyweed portkey, keeper
        Godric’s Hollow telescope, splinched fire-whisky silver Leprechaun O.W.L.
        stroke the spine. Chalice Hungarian Horntail, catherine wheels Essence of
        Dittany Gringotts Harry Potter. Prophecies Yaxley green eyes Remembrall
        horcrux hand of the servant. Devil’s snare love potion Ravenclaw, Professor
        Sinistra time-turner steak and kidney pie. Cabbage Daily Prophet letters
        from no one Dervish and Banges leg. <br>
        <br>
        Thestral dirigible plums, Viktor Krum hexed memory charm Animagus
        Invisibility Cloak three-headed Dog. Half-Blood Prince Invisibility Cloak
        cauldron cakes, hiya Harry! Basilisk venom Umbridge swiveling blue eye
        Levicorpus, nitwit blubber oddment tweak. Chasers Winky quills The Boy Who
        Lived bat spleens cupboard under the stairs flying motorcycle. Sirius Black
        Holyhead Harpies, you’ve got dirt on your nose. Floating candles Sir
        Cadogan The Sight three hoops disciplinary hearing. Grindlewald pig’s tail
        Sorcerer\'s Stone biting teacup. Side-along dragon-scale suits Filch 20
        points, Mr. Potter. <br>
        <br>
        Prefect’s bathroom Trelawney veela squashy armchairs, SPEW: Gamp’s
        Elemental Law of Transfiguration. Magic Nagini bezoar, Hippogriffs Headless
        Hunt giant squid petrified. Beuxbatons flying half-blood revision schedule,
        Great Hall aurors Minerva McGonagall Polyjuice Potion. Restricted section
        the Burrow Wronski Feint gnomes, quidditch robes detention, chocolate
        frogs. Errol parchment knickerbocker glory Avada Kedavra Shell Cottage
        beaded bag portrait vulture-hat. Twin cores, Aragog crimson gargoyles, Room
        of Requirement counter-clockwise Shrieking Shack. Snivellus second floor
        bathrooms vanishing cabinet Wizard Chess, are you a witch or not? <br>
        <br>
        Squashy armchairs dirt on your nose brass scales crush the Sopophorous bean
        with flat side of silver dagger, releases juice better than cutting. Full
        moon Whomping Willow three turns should do it lemon drops. Locomotor trunks
        owl treats that will be 50 points, Mr. Potter. Witch Weekly, he will rise
        again and he will come for us, headmaster Erumpent horn. Fenrir Grayback
        horseless carriages ‘zis is a chance many would die for!',
        'author' => 'Voldemort',
        'publishedDate' => '2005-04-05',
        'likeCounter' => 54,
        'img' => 'img/Voldemort2.jpg',
    ],
    [
        'title' => 'Cheeses!',
        'content' => 'Emmental lancashire cheesecake. Cheesy grin swiss cheese and
        wine bocconcini roquefort cheesy feet bavarian bergkase camembert de
        normandie. Swiss fromage frais who moved my cheese cream cheese bavarian
        bergkase cottage cheese the big cheese cheese triangles. Cream cheese queso
        blue castello cheese and biscuits edam hard cheese. <br>
        Everyone loves who moved my cheese red leicester. Everyone loves brie
        manchego mascarpone cut the cheese everyone loves stinking bishop bavarian
        bergkase. Rubber cheese macaroni cheese parmesan who moved my cheese say
        cheese brie cheese and wine fondue. Fondue gouda red leicester babybel
        smelly cheese lancashire halloumi. <br>
        Gouda cheese triangles brie. Cheese triangles cottage cheese cheese and
        biscuits cheesecake rubber cheese camembert de normandie fromage frais
        caerphilly. Fondue goat the big cheese edam st. agur blue cheese cheese and
        biscuits cheeseburger paneer. Feta airedale port-salut gouda the big cheese
        monterey jack cheesy grin cottage cheese. Chalk and cheese. <br>
        Brie fromage frais cheese on toast. Chalk and cheese fromage frais cottage
        cheese who moved my cheese hard cheese emmental jarlsberg mozzarella.
        Fromage frais camembert de normandie st. agur blue cheese taleggio
        cheesecake roquefort blue castello the big cheese. Cheese and biscuits goat
        melted cheese. <br>
        Bocconcini cottage cheese parmesan. Queso st. agur blue cheese jarlsberg
        mascarpone camembert de normandie chalk and cheese cheddar pepper jack.
        Cheese slices pecorino jarlsberg cheesy grin port-salut cheese slices cut
        the cheese the big cheese. Stilton who moved my cheese stilton babybel
        parmesan cheese on toast.',
        'author' => 'Edward Blom',
        'publishedDate' => '2012-09-17',
        'likeCounter' => 43,
        'img' => 'img/Cheese.jpg',
    ],
    [
        'title' => 'Why dogs are the best',
        'content' => 'Doggo ipsum you are doing me a frighten heckin good boys and
        girls fat boi heckin good boys pats aqua doggo, super chub smol length boy
        boofers. Many pats heckin very hand that feed shibe pupper yapper pupper,
        doing me a frighten thicc clouds long water shoob. You are doing me a
        frighten pupper heckin good boys pupperino length boy, blep ruff very
        jealous pupper. Sub woofer long woofer you are doing me a frighten
        shooberino dat tungg tho big ol pupper what a nice floof, long doggo wow
        very biscit pupperino pupper. Doing me a frighten sub woofer blop very hand
        that feed shibe porgo boofers, big ol pupper blep woofer heckin. shoob
        shibe borking doggo. Shoober shibe long bois what a nice floof big ol, smol
        borking doggo with a long snoot for pats woofer. Snoot many pats pats
        woofer very good spot, smol very jealous pupper. <br>
        <br>
        Corgo long bois wow such tempt smol borking doggo with a long snoot for
        pats many pats, long woofer pupper long bois. the neighborhood pupper.
        Shibe long water shoob very jealous pupper, shoob. Long doggo wrinkler aqua
        doggo such treat, big ol. Wrinkler wow such tempt aqua doggo long bois
        pupperino thicc, borking doggo aqua doggo mlem maximum borkdrive. Clouds
        thicc yapper big ol, doge wow such tempt. <br>
        Big ol sub woofer very taste wow, length boy. Pupper you are doin me a
        concern dat tungg tho heckin good boys dat tungg tho very hand that feed
        shibe very jealous pupper floofs tungg, heckin good boys and girls long
        bois shibe long water shoob big ol aqua doggo. Porgo long bois puggo vvv
        lotsa pats, corgo h*ck. You are doing me a frighten aqua doggo shoober much
        ruin diet thicc, heckin good boys and girls clouds long bois. Noodle horse
        blop long water shoob, pupperino. Doing me a frighten waggy wags big ol
        pupper boof big ol, most angery pupper I have ever seen pupperino. Fluffer
        such treat porgo, you are doing me a frighten. Ruff doing me a frighten
        heckin borkdrive boof, heckin angery woofer long doggo. Doggo extremely
        cuuuuuute doggorino heckin good boys and girls puggo wow such tempt, ur
        givin me a spook heckin fat boi thicc, you are doin me a concern shooberino
        smol maximum borkdrive. You are doing me the shock shoob heckin good boys
        vvv very taste wow, porgo mlem fat boi.',
        'author' => 'Scooby Doo',
        'publishedDate' => '2018-05-03',
        'likeCounter' => 35,
        'img' => 'img/Dog.jpg',
    ],
    [
        'title' => 'Captain Jack Sparrow Fell Overboard!',
        'content' => 'Lad clap of thunder warp starboard hail-shot long boat
        American Main jury mast chase guns squiffy. Handsomely swing the lead bilge
        rat Blimey me lookout nipper Corsair six pounders aft. Square-rigged six
        pounders chandler Jack Ketch Plate Fleet bring a spring upon her cable
        sheet smartly cable lee. <br>
        Rope\'s end killick furl Davy Jones\' Locker red ensign ballast code of
        conduct overhaul measured fer yer chains lugger. Trysail squiffy snow
        salmagundi list Yellow Jack to go on account broadside run a rig gabion.
        Rope\'s end lad ye line hands draught jib hang the jib loot flogging. <br>
        <br>
        Spanker hail-shot Sail ho rum lee bounty crack Jennys tea cup aye Privateer
        prow. Black jack crow\'s nest squiffy provost chantey broadside furl gibbet
        chase guns main sheet. Ho draft Plate Fleet Jack Ketch trysail parrel
        strike colors fore spyglass haul wind. <br>
        <br>
        Main sheet gangplank league scurvy to go on account long clothes landlubber
        or just lubber red ensign bilge water Corsair. Wench tack tender haul wind
        Admiral of the Black fire ship coxswain pirate Sink me splice the main
        brace. Fire ship jib log hempen halter coffer bilge water Shiver me timbers
        sloop hogshead fathom. <br>
        Barque haul wind boatswain cog fathom parley marooned Brethren of the Coast
        scallywag pirate. Gangplank gibbet chase guns Spanish Main belay splice the
        main brace spirits swab flogging main sheet. Corsair Jack Ketch schooner
        Brethren of the Coast black spot matey belay lookout spyglass swab. <br>
        <br>
        Draft keel schooner jolly boat pinnace tack careen rutters scallywag jib.
        Gibbet Gold Road provost coffer mizzenmast fluke draught stern lookout
        man-of-war. Wench fluke rutters Plate Fleet clipper gibbet capstan Pieces
        of Eight topsail Buccaneer.',
        'author' => 'Black Beard',
        'publishedDate' => '1712-08-05',
        'likeCounter' => 86,
        'img' => 'img/BlackPearl.jpg',
    ],
    [
        'title' => 'How Captain Jack Sparrow Acctually Escaped The Abandond Island',
        'content' => 'Fluke lass draught black jack scuttle gangway hardtack
        Brethren of the Coast line scuppers. Strike colors yardarm shrouds lad six
        pounders reef sails come about sheet hearties measured fer yer chains. Blow
        the man down mizzenmast lugger jolly boat spyglass knave wherry prow stern
        coxswain. <br>
        Jack Ketch bilged on her anchor lee clap of thunder Buccaneer nipperkin
        gangplank keelhaul rutters fathom. Hardtack gangway Yellow Jack bounty
        bilged on her anchor nipperkin chase guns belaying pin hail-shot fore.
        Driver chase guns list swab fluke Arr furl Pirate Round draught blow the
        man down. <br>
        <br>
        Lugger Davy Jones\' Locker Sink me parley trysail keel brig aye hogshead
        Plate Fleet. List red ensign scuttle Yellow Jack walk the plank fathom
        Buccaneer hardtack lee chantey. Reef sails list bilged on her anchor
        hail-shot jury mast me league belay gangplank lass. <br>
        <br>
        Cable warp hogshead hail-shot Sail ho chase topgallant haul wind hulk fore.
        Main sheet holystone furl gally marooned boom bilge loaded to the gunwalls
        Jolly Roger grog. Yardarm mizzen interloper scurvy hempen halter Jack Ketch
        fluke Cat o\'nine tails chantey aye. <br>
        <br>
        Keel lugger ballast squiffy barkadeer strike colors Shiver me timbers
        heave down Gold Road grog blossom. Bounty furl fire in the hole prow
        trysail Plate Fleet gally bilged on her anchor Nelsons folly piracy. Blimey
        brigantine overhaul black jack pressgang mizzenmast tender scurvy line
        draft. <br>
        Mizzen gibbet knave hornswaggle case shot Plate Fleet belaying pin
        man-of-war scallywag fire in the hole. Dance the hempen jig warp clap of
        thunder Admiral of the Black bilge Sink me swab interloper lee crimp.
        Letter of Marque rope\'s end deadlights grog grapple belay bilge water
        topgallant bilged on her anchor scourge of the seven seas.',
        'author' => 'Black Beard',
        'publishedDate' => '1709-01-12',
        'likeCounter' => 208,
        'img' => 'img/Jack.jpg',
    ],
    [
        'title' => 'I am In Love With Cheeseburgers',
        'content' => 'Epic cheeseburgers come in all kinds of manifestations, but
        we want them in and around our mouth no matter what. Slide those smashed
        patties with the gently caramelized meat fat between a toasted brioche bun
        and pass it over. You fall in love with the cheeseburger itself but the
        journey ain’t half bad either. <br>
        <br>
        They’re the childhood friend that knows your highest highs and lowest lows.
        They’ve been with you through thick and thin and they’re the best at
        keeping secrets. Whether it’s dressed up or informal, cheeseburgers have
        your back. <br>
        <br>
        Sometimes we lose sight of what really matters in life. There’s something
        to be said for a gourmet brie and truffle burger paired with parmesan
        frites, but don’t let that make you forget about the ol’ faithful with
        American cheddar and a squishy bun. Lettuce remind you that cheeseburgers
        come in all forms - bun intended. <br>
        <br>
        Pop quiz: what’s the greatest thing to happen to your mind, body, and soul
        in recent history? A cheeseburger, obviously. Cheeseburgers know that what
        you want can also be what you need.',
        'author' => 'Scooby Doo',
        'publishedDate' => '2016-05-27',
        'likeCounter' => 15,
        'img' => 'img/Hamburger.jpg',
    ],
    [
        'title' => 'I Love Bacon!',
        'content' => 'Bacon ipsum dolor amet sausage shankle drumstick pig, fatback
        boudin ground round strip steak. Pork chop filet mignon brisket cow. Shank
        beef ribs buffalo rump pastrami shoulder. Short loin landjaeger fatback
        tri-tip meatloaf beef ribs frankfurter pancetta ham hock porchetta.
        Tenderloin ground round jerky pork landjaeger short loin drumstick
        picanha. <br>
        <br>
        Tongue tail chuck leberkas ball tip pastrami filet mignon landjaeger.
        Venison tail pig, burgdoggen doner pancetta corned beef. Capicola brisket
        porchetta, fatback tenderloin ham salami strip steak pig. Venison ribeye
        sirloin, shoulder doner pork chop t-bone. Picanha pork belly sirloin bacon
        shoulder, kevin turducken alcatra landjaeger buffalo meatball kielbasa
        porchetta meatloaf. <br>
        <br>
        Meatloaf porchetta landjaeger, pork chop tail ground round buffalo biltong.
        Bacon ball tip swine rump tongue landjaeger. Pork chop ground round picanha
        venison pig. Short loin turducken beef ribs, hamburger fatback picanha
        frankfurter leberkas biltong swine. Frankfurter tenderloin kevin landjaeger
        tri-tip fatback meatloaf brisket. Flank ball tip shoulder, short ribs jerky
        t-bone capicola spare ribs prosciutto. Brisket shoulder jowl prosciutto
        pancetta burgdoggen leberkas salami rump chuck. <br>
        <br>
        Rump ground round andouille, boudin pork chop jowl leberkas pork loin
        shankle porchetta pastrami burgdoggen cupim. Chuck ground round doner kevin
        cow swine alcatra beef tri-tip pastrami ham hock strip steak andouille jowl
        spare ribs. Burgdoggen shankle strip steak leberkas pastrami shoulder
        bresaola cupim. Turkey short loin landjaeger, boudin prosciutto tail ribeye
        buffalo corned beef fatback cow leberkas. Filet mignon shank swine
        tenderloin pastrami jowl boudin, venison ground round pork chop. Boudin
        pork belly meatball, tongue hamburger sausage ham pig short loin t-bone
        chicken strip steak tri-tip turkey swine. Ham tongue jowl sirloin, pastrami
        tail corned beef bacon doner pork chop cupim spare ribs chuck strip steak
        meatball. <br>
        <br>
        Leberkas ball tip cupim turducken flank strip steak. Swine turkey pig pork
        belly prosciutto kevin brisket drumstick ribeye, biltong cupim tail
        leberkas. Tail tri-tip ham pig. Burgdoggen meatloaf pork chop, hamburger
        meatball tongue rump cupim shankle flank cow drumstick. Tenderloin tail
        ribeye pig burgdoggen corned beef beef ribs spare ribs pancetta bacon jowl
        flank. Sirloin prosciutto doner ham bresaola tenderloin pork loin, short
        loin brisket ham hock pastrami tongue flank corned beef. Leberkas pork
        belly bacon, pancetta ribeye ground round shank biltong venison cow
        hamburger fatback cupim.',
        'author' => 'Edward Blom',
        'publishedDate' => '2017-02-17',
        'likeCounter' => 20,
        'img' => 'img/Bacon.jpg',
    ],
];


// Array for articles. En annan variant.
// $articles2 = [
//     [
//         'title' => [
//           'title1',
//           'title2',
//         ],
//         'content' => [
//             'content1',
//             'content2',
//         ],
//         'author' => 'author1',
//         'publishedDate' => [
//             '2018-01-01',
//             '2018-02-02',
//         ],
//         'likeCounter' => [
//             1,
//             2,
//         ],
//     ],
//     [
//         'title' => [
//           'title3',
//           'title4',
//         ],
//         'content' => [
//             'content3',
//             'content4',
//         ],
//         'author' => 'author2',
//         'publishedDate' => [
//             '2018-03-03',
//             '2018-04-04',
//         ],
//         'likeCounter' => [
//             3,
//             4,
//         ],
//     ],
//     [
//         'title' => [
//           'title5',
//           'title6',
//         ],
//         'content' => [
//             'content5',
//             'content6',
//         ],
//         'author' => 'author3',
//         'publishedDate' => [
//             '2018-05-05',
//             '2018-06-06',
//         ],
//         'likeCounter' => [
//             5,
//             6,
//         ],
//     ],
//     [
//         'title' => [
//           'title7',
//           'title8',
//         ],
//         'content' => [
//             'content7',
//             'content8',
//         ],
//         'author' => 'author4',
//         'publishedDate' => [
//             '2018-07-07',
//             '2018-08-08',
//         ],
//         'likeCounter' => [
//             7,
//             8,
//         ],
//     ],
//     [
//         'title' => [
//           'title9',
//           'title10',
//         ],
//         'content' => [
//             'content9',
//             'content10',
//         ],
//         'author' => 'author5',
//         'publishedDate' => [
//             '2018-09-09',
//             '2018-10-10',
//         ],
//         'likeCounter' => [
//             9,
//             10,
//         ],
//     ],
// ];
