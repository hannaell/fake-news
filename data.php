<?php
declare(strict_types=1);
// This is the file where you can keep your data arrays such as articles and
// authors.

// Array for authors names and the authors IDs.
$authors = [
  ['name' => 'Author1', 'id' => 1],
  ['name' => 'Author2', 'id' => 2],
  ['name' => 'Author3', 'id' => 3],
  ['name' => 'Author4', 'id' => 4],
  ['name' => 'Author5', 'id' => 5],
];

// Array for articles. En variant.
$articles = [
  [
    'title' => 'fake news',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
    rutrum dolor malesuada, sollicitudin eros id, ultricies nibh. Proin a nulla
    tempus felis iaculis auctor. Aliquam erat volutpat. Integer vitae ex vitae
    enim dapibus mollis. Quisque justo enim, commodo quis euismod eget,
    ullamcorper in massa. Pellentesque congue nulla eu elit semper, id
    tincidunt diam imperdiet. Nam porta erat turpis, id congue nibh ultrices
    sed.' . '<br>' .

    'Proin at rhoncus dolor. Cras sagittis lobortis sapien sit amet facilisis.
    Integer quis enim gravida erat sollicitudin aliquam quis sed libero. Sed
    sagittis imperdiet diam, sed dictum odio. Maecenas sodales enim sed
    sagittis tristique. Nulla et turpis vestibulum, venenatis ex eu, viverra
    erat. Praesent eleifend vel nunc vitae vestibulum. Sed ipsum risus, congue
    a pulvinar eu, semper vitae diam. Sed vitae ultricies nulla. Vestibulum
    ornare quam augue, quis rutrum est pretium dignissim. Integer gravida
    varius interdum. Fusce sit amet dignissim nunc, aliquam scelerisque lectus.
    In luctus, metus ut bibendum elementum, odio massa aliquet nibh, gravida
    tempus tortor nisl et erat.' . '<br>' .

    'Suspendisse et laoreet massa. Donec auctor sagittis nisi, a facilisis
    lectus rutrum et. Aliquam rhoncus mauris sed enim pretium, et accumsan ex
    rhoncus. Nulla facilisi. In quis porta arcu. Curabitur congue commodo
    dolor. Nam semper augue varius, consequat est imperdiet, elementum lorem.
    Phasellus dolor justo, accumsan et cursus at, cursus non tortor.
    Suspendisse mauris lacus, sollicitudin elementum magna pulvinar, fringilla
    aliquam velit.' . '<br>' .

    'Nunc aliquet erat id augue posuere, non tempor dolor dapibus. Aliquam erat
    volutpat. Vestibulum a imperdiet magna. Pellentesque congue odio a justo
    blandit venenatis. Pellentesque feugiat sed ipsum id tincidunt. Nulla nec
    consectetur orci. Donec lectus sem, elementum sed imperdiet at, volutpat
    vel ante. Praesent nec enim vel justo suscipit consectetur. Phasellus
    venenatis, ante sodales viverra luctus, nisl dui pulvinar quam, ac
    scelerisque sem ante vitae augue. Morbi nec consectetur felis, id accumsan
    mauris. Aliquam commodo massa et velit pharetra, imperdiet congue quam
    tristique. Aliquam euismod augue sapien. Cras dignissim suscipit leo,
    interdum vulputate ligula mattis at. In ultricies, nisl eu rutrum rhoncus,
    odio sapien pulvinar enim, eget dapibus justo ligula a tortor. Aenean
    consectetur orci ex. Vestibulum eu nisl nunc.' . '<br>' .

    'In iaculis ullamcorper mauris, eu dignissim quam finibus id. Integer ac ex
    at turpis mattis pretium sollicitudin vel nulla. Vestibulum vel justo
    tempus lorem blandit ullamcorper eu eu orci. Nulla tincidunt maximus
    fermentum. Cras sit amet porttitor neque, ut venenatis ex. Curabitur
    feugiat auctor vulputate. Maecenas interdum vehicula quam. Aliquam ultrices
    neque eget dui aliquam, et dapibus tortor convallis. Morbi eu varius justo,
    id dignissim eros. Duis eu augue tristique est sollicitudin commodo. Sed a
    egestas nunc. Nulla eget hendrerit felis. Sed elementum suscipit velit a
    congue. Proin magna eros, interdum vel sem at, dignissim bibendum eros.
    Nunc id eleifend est, sed varius augue. Donec quis massa eget eros mollis
    egestas at eu ante.',
    'author' => 'hanna',
    'publishedDate' => '2018-10-17',
    'likeCounter' => 54,
  ],
  [
    'title' => 'fake news',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Integer ut dolor arcu. Quisque eleifend vel ex luctus convallis. Cras
    faucibus neque non rhoncus ultricies. Praesent ac placerat erat. Sed
    tincidunt ultrices eros in varius. Cras id tellus pharetra, tempor lorem
    vel, pulvinar nisi. Morbi id volutpat odio, nec ornare nulla. Donec quis
    nisl eget neque ornare interdum in aliquam nunc. Nullam porta commodo eros,
    vitae blandit felis tincidunt et. Etiam at tortor condimentum sem semper
    egestas at convallis mi. Vestibulum volutpat varius nisi. Fusce hendrerit
    venenatis arcu eget tristique.' . '<br>' .

    'In eu sapien scelerisque, hendrerit lectus vel, semper nisl. Quisque
    maximus, nibh nec ultricies ullamcorper, risus risus tincidunt dui,
    imperdiet egestas ligula ipsum porta enim. Quisque ultrices magna vel
    felis ullamcorper, sit amet dapibus odio condimentum. Nunc pretium, odio
    eget pellentesque dictum, eros ipsum commodo dolor, in malesuada justo
    purus et neque. Mauris tristique consequat nisl et pellentesque. Maecenas
    imperdiet porta velit, quis fringilla augue mollis sit amet. Aliquam
    lobortis, diam eu ornare venenatis, metus nunc blandit ligula, convallis
    rhoncus augue arcu sed est. Nullam dignissim risus sed aliquam aliquam.
    Proin at eros non neque iaculis mattis bibendum vitae nunc. Donec elementum
    consequat malesuada. Suspendisse lacinia massa nec lorem blandit hendrerit.
    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
    inceptos himenaeos. Maecenas in ultricies eros. Nullam iaculis nulla nec
    condimentum fringilla. Nam sed arcu non orci semper mollis quis vitae
    lectus. Aenean id arcu luctus, malesuada nisi blandit, condimentum
    velit.' . '<br>' .

    'Curabitur quis mi in dolor viverra ullamcorper aliquam sed est. Phasellus
    mattis massa sed nunc vulputate, a euismod eros aliquam. Aenean congue
    molestie faucibus. Integer pharetra interdum arcu non scelerisque. Nulla
    facilisi. Sed vitae sodales mauris, sed tincidunt quam. Phasellus commodo
    consectetur justo ac porta. Fusce dapibus risus est, sed placerat lorem
    placerat in. Aenean in sagittis velit.' . '<br>' .

    'Etiam at lectus pulvinar, feugiat turpis non, gravida felis. Proin pulvinar
    mollis mauris quis dictum. Cras a volutpat orci. Proin feugiat, neque ac
    commodo ultrices, arcu velit eleifend est, ac efficitur lacus augue iaculis
    est. Maecenas sodales lorem eleifend, auctor sem nec, commodo diam.
    Suspendisse gravida ipsum eu feugiat luctus. Curabitur scelerisque quam id
    turpis vestibulum euismod. Aliquam at mauris non justo efficitur hendrerit
    euismod a metus. Nullam non hendrerit metus. Fusce viverra nunc et eros
    porta, sed feugiat nulla eleifend. Quisque hendrerit nulla imperdiet,
    venenatis lorem sagittis, dapibus elit. Vestibulum at elit
    nulla.' . '<br>' .

    'Sed auctor, ligula vel faucibus tincidunt, orci sem sollicitudin nisi, quis
    laoreet risus arcu sit amet leo. Maecenas lobortis quam at mauris varius
    scelerisque. Sed ac imperdiet velit. Sed porttitor felis sem, nec rhoncus
    magna condimentum aliquet. Donec ligula turpis, sollicitudin a odio sed,
    fermentum suscipit metus. Nunc tincidunt fringilla interdum. Donec id
    lobortis metus.',
    'author' => 'hanna',
    'publishedDate' => '2018-10-17',
    'likeCounter' => 54,
  ],
  [
    'title' => 'fake news',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Quisque finibus at sem et sodales. Etiam ut sodales massa. Pellentesque sit
    amet lacus in purus ultrices pellentesque pellentesque et leo. Phasellus
    rhoncus facilisis facilisis. Praesent vel ante metus. Quisque eget maximus
    nulla. Phasellus varius, nisl ut dignissim tempor, quam enim sagittis leo,
    id sagittis lectus ex sagittis ante. Integer vulputate, est vitae rutrum
    sagittis, ipsum lacus sollicitudin mi, pharetra rhoncus leo lacus ac
    ligula. Ut ut feugiat dolor. Mauris at velit scelerisque, gravida lectus
    quis, tristique dui. Donec cursus pulvinar elit, a consequat purus.
    Suspendisse sit amet molestie urna, et commodo leo. Fusce vel imperdiet
    tortor. Nullam pretium ullamcorper nunc a rhoncus.' . '<br>' .

    'Praesent viverra libero sit amet mauris mattis, ac vehicula lacus
    hendrerit. Sed imperdiet ligula in est cursus, sit amet mattis ipsum
    pulvinar. Integer ac varius dolor, ut ornare ipsum. Nunc volutpat varius mi
    quis mollis. Suspendisse eget tincidunt lacus, id fermentum elit. Ut non
    ligula sed nisi facilisis placerat. Vestibulum nibh libero, iaculis non
    accumsan feugiat, luctus id elit. Mauris venenatis nunc ultricies varius
    convallis. Integer volutpat efficitur semper. Nulla quis nisl non risus
    auctor semper ac eu nibh. Fusce venenatis leo eu pellentesque feugiat.
    Fusce at tortor lorem. Duis viverra mi elit, nec commodo nunc accumsan
    eget.' . '<br>' .

    'Mauris gravida quam mauris, sit amet blandit eros pulvinar vel. Aliquam
    pulvinar nisl in velit imperdiet, et sagittis dolor pretium. Curabitur
    luctus augue vitae laoreet sollicitudin. Nam id luctus tortor. Nulla
    facilisi. Mauris ultricies lacus sit amet varius dapibus. Suspendisse
    lobortis ligula ligula, nec gravida nibh gravida a. Curabitur eu libero
    mollis dui commodo semper. Fusce semper, justo ut molestie faucibus, magna
    tortor facilisis elit, at vehicula risus ipsum eu quam.' . '<br>' .

    'Etiam dapibus ullamcorper felis vitae iaculis. Suspendisse potenti.
    Praesent ultricies justo ut ligula tempus faucibus. Nulla id sagittis
    lacus, eu fermentum diam. Nullam cursus, ligula vel consectetur iaculis,
    tortor elit vulputate nibh, non tristique enim nulla quis lorem. Morbi
    varius urna dolor, id sagittis ligula scelerisque in. Vivamus volutpat nisl
    elit, eu facilisis justo efficitur et. Quisque sollicitudin dignissim purus
    ac ultricies. Fusce hendrerit arcu vel imperdiet gravida. Duis nec metus
    lacinia eros mollis aliquam. Integer lobortis ut sapien at rutrum. Donec
    sed fermentum sapien. Curabitur aliquet sodales ligula, vel pellentesque
    risus mattis vitae. Phasellus non tortor sed ipsum fermentum tempus. Aenean
    sit amet arcu vitae orci tincidunt gravida.' . '<br>' .

    'Donec et sapien nisi. Morbi posuere ante nec ante congue varius. Quisque
    tincidunt gravida maximus. Donec sed libero molestie, pharetra lorem et,
    posuere nibh. Sed pellentesque mi tempor dui tempor tempor. Sed volutpat
    nisl a mattis faucibus. Vestibulum et elit ut lectus feugiat dignissim sed
    vitae neque. Praesent ante arcu, tristique non neque et, varius convallis
    eros. Donec nec diam bibendum, varius justo at, lobortis ligula.',
    'author' => 'hanna',
    'publishedDate' => '2018-10-17',
    'likeCounter' => 54,
  ],
  [
    'title' => 'fake news',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Suspendisse dictum purus sed eros accumsan, ut eleifend diam sagittis.
    Mauris non diam lorem. Morbi pulvinar ultrices fermentum. Pellentesque
    ornare at velit eu volutpat. Donec vel venenatis turpis. Donec eget
    porttitor felis. Mauris eu finibus lacus. Donec mollis nec enim quis
    mattis. Etiam faucibus odio eget nibh dictum ullamcorper. Quisque a tortor
    a nisi pretium mollis. In pellentesque odio non nisl cursus ultricies. Sed
    feugiat molestie nulla, id facilisis nunc pharetra non. Sed cursus arcu
    vitae lacinia auctor. Etiam interdum eleifend augue elementum dictum. In
    eget mauris nec diam porta placerat. Donec quam lacus, finibus et
    ullamcorper et, aliquam ut mi.' . '<br>' .

    'Maecenas congue sapien sit amet condimentum consectetur. Donec fermentum,
    urna vitae viverra porttitor, orci risus condimentum lorem, a bibendum erat
    justo eget urna. Mauris tincidunt nec dolor sed fringilla. Sed ultricies
    ante ut ullamcorper fermentum. Proin ut libero auctor, convallis lectus ut,
    sollicitudin sapien. Morbi mattis enim ac est ornare maximus. Cras in
    dignissim nulla. Quisque iaculis dui non rutrum consectetur. Donec quis
    tempus diam, eget eleifend tellus. Nullam pretium ultricies eros non
    iaculis. In hac habitasse platea dictumst. Nulla nec nulla nec quam
    suscipit facilisis vel ut risus.' . '<br>' .

    'Aliquam at sem iaculis mi pharetra hendrerit. Aenean vitae odio sed urna
    malesuada auctor. Cras augue purus, sagittis sed libero ut, posuere
    tincidunt orci. Mauris non consequat tellus. Donec non pellentesque quam.
    Maecenas tempor consectetur velit ac tempus. Duis sit amet egestas lorem,
    sit amet sollicitudin nisi. Morbi porta mi ut orci pharetra ultrices.
    Quisque tempus mi nec erat rutrum, non vestibulum nisi
    consectetur.' . '<br>' .

    'Maecenas sit amet vestibulum tortor, ut sollicitudin ligula. Aenean finibus
    lacinia enim scelerisque gravida. Pellentesque at porta erat, quis bibendum
    neque. Etiam nisl quam, semper sit amet tristique vitae, consectetur vitae
    libero. Duis scelerisque mattis odio, in luctus est dictum a. Nam sed nisi
    nec sem hendrerit laoreet. Maecenas gravida vulputate interdum. Integer
    lacus quam, facilisis in sapien in, tempor vehicula ipsum. Nullam id nisl
    eu sapien auctor dapibus eu sit amet risus. Maecenas mollis quis odio at
    auctor.' . '<br>' .

    'Integer ac est lorem. Nulla eu tristique leo. Quisque enim lorem, lobortis
    eu lobortis a, mollis sit amet sem. Proin auctor malesuada sem a elementum.
    Vivamus nibh turpis, consequat non erat sit amet, luctus dictum dui. Fusce
    tortor velit, congue sit amet nunc et, euismod dignissim velit. Maecenas
    blandit dapibus lorem, quis sodales nisl dapibus sed. Etiam vel augue
    consectetur, mollis ligula ac, condimentum nunc. Nam aliquam sodales est
    vitae porttitor. Proin sed posuere purus. In commodo massa vitae felis
    tincidunt sodales. Quisque posuere maximus scelerisque. Proin sollicitudin
    odio eu blandit fermentum. Nulla placerat quam est, in maximus sapien
    sagittis et.',
    'author' => 'hanna',
    'publishedDate' => '2018-10-17',
    'likeCounter' => 54,
  ],
  [
    'title' => 'fake news',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Suspendisse non diam convallis nibh lobortis venenatis sed ut risus. Duis
    ullamcorper sagittis mauris ut auctor. Sed sit amet lacus tincidunt turpis
    volutpat fringilla et quis dolor. Morbi id dui eu nisl malesuada ultrices.
    Suspendisse potenti. Vivamus nisi enim, imperdiet et finibus et, ultrices
    id nunc. Donec feugiat sapien metus, porta facilisis dui pulvinar et. Donec
    varius eros quis est gravida, ut finibus mi rutrum. Sed efficitur aliquet
    ante, et pulvinar est finibus finibus. Aenean fringilla sollicitudin
    libero, et consectetur purus dictum quis. Integer neque nibh, mattis
    iaculis rhoncus at, commodo consectetur libero. Curabitur eu lacus quis
    massa gravida malesuada non at ipsum. Vestibulum posuere arcu sed est
    malesuada pretium.' . '<br>' .

    'Maecenas dui turpis, mollis vel est nec, tincidunt bibendum diam. Fusce
    auctor at tellus eget pellentesque. Sed tincidunt bibendum odio, ultricies
    commodo ipsum aliquet sit amet. Vivamus consectetur lacinia odio id
    placerat. Donec ut eleifend ligula, at tincidunt augue. Sed sit amet velit
    eros. Suspendisse aliquet purus nulla, in elementum nisl porttitor
    suscipit. Morbi ut semper nibh. Nam at sapien id velit sagittis hendrerit
    vitae quis tellus. Nunc et congue nulla.' . '<br>' .

    'Sed ut arcu varius, dignissim urna at, ultrices enim. Ut lectus mauris,
    sodales vel sem nec, viverra bibendum elit. Proin nec tortor quis nunc
    porttitor lacinia ut eget magna. Donec pretium nunc tellus, vel lobortis
    sem semper ultricies. Nulla eget sem ut tortor condimentum fringilla. Fusce
    tristique metus nunc, et vulputate nibh ultricies pretium. Nunc at interdum
    diam. Cras commodo scelerisque mollis. In ex nisl, ullamcorper ac
    scelerisque non, viverra et purus. Donec malesuada, eros ut tincidunt
    sagittis, mi nunc sagittis quam, vitae pharetra sapien metus nec dolor.
    Mauris posuere sapien ac dui porttitor dapibus. Duis pulvinar eget est quis
    malesuada. Phasellus non lacus fringilla, bibendum elit vel, lacinia erat.
    Nulla et erat cursus, egestas lacus ut, tincidunt nunc. Aenean rutrum
    elementum sagittis.' . '<br>' .

    'Phasellus eu nulla aliquam, mattis neque vulputate, eleifend arcu. Vivamus
    posuere libero nulla, vel faucibus ligula vulputate sit amet. Sed ac nisi
    molestie lorem ornare viverra. Pellentesque habitant morbi tristique
    senectus et netus et malesuada fames ac turpis egestas. Morbi ultrices
    risus quis nisl euismod molestie. Ut luctus, massa in ornare commodo, nulla
    purus pellentesque odio, sed fringilla felis risus ac nibh. Aenean ultrices
    nisl vitae elit placerat euismod. Donec urna diam, mattis vel elit sed,
    accumsan efficitur eros. In vel malesuada dolor, eu mattis mauris. Nullam
    consectetur pellentesque quam, a aliquet purus fringilla at. Sed sed
    commodo arcu, fringilla varius turpis. Vestibulum consequat sollicitudin
    vulputate. Aliquam interdum augue justo, at ultricies felis mollis id.
    Suspendisse ut porta enim, in lacinia lectus. Vestibulum ante ipsum primis
    in faucibus orci luctus et ultrices posuere cubilia Curae;' . '<br>' .

    'Phasellus tristique tortor sit amet turpis tincidunt, a pretium lorem
    aliquam. Donec suscipit lacus non purus molestie tincidunt. Pellentesque
    dictum maximus ornare. Aliquam sit amet massa non massa imperdiet fringilla
    vitae eu tellus. Nam quam nisi, aliquam eget tellus et, imperdiet euismod
    quam. Proin tempus ipsum vel augue gravida, et tristique orci pulvinar.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec placerat
    iaculis dolor vel varius. Nullam eleifend semper eros at dignissim. Class
    aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
    himenaeos. Nullam finibus molestie est, suscipit fringilla quam condimentum
    at. Suspendisse quis pellentesque magna, id euismod magna. Curabitur
    volutpat ipsum quis tellus tempor, at suscipit urna lacinia. Quisque
    finibus congue urna nec dignissim. Donec sagittis ullamcorper efficitur.',
    'author' => 'hanna',
    'publishedDate' => '2018-10-17',
    'likeCounter' => '54',
  ],
  [
    'title' => 'fake news',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
    suscipit leo augue, in iaculis tortor dictum et. Nullam pellentesque,
    mauris vel finibus auctor, massa nisi volutpat orci, vitae convallis quam
    nulla vel tellus. Sed porta, nunc et sollicitudin cursus, odio libero
    fermentum nisl, at pretium massa nisl vel libero. Praesent lectus dolor,
    convallis ut venenatis vitae, euismod ac ligula. Nam tristique nulla quis
    massa facilisis posuere. Cras sit amet elementum ante, ut rhoncus libero.
    Pellentesque laoreet gravida purus, ut aliquam est volutpat vel. Vestibulum
    cursus mauris leo, vitae sollicitudin est varius at. Ut hendrerit diam non
    tortor cursus scelerisque. Etiam euismod nibh eget nibh sagittis, nec
    dictum quam imperdiet. Ut efficitur ex quis tellus tempor, nec consectetur
    ante ornare. Etiam varius placerat mauris non sagittis.' . '<br>' .

    'Ut sagittis erat eget rhoncus bibendum. Vivamus semper massa eget turpis
    tempus, id sollicitudin dolor scelerisque. Fusce venenatis a felis a
    congue. Phasellus aliquam vestibulum eleifend. Curabitur vehicula odio at
    arcu dictum, a tempus dolor finibus. Maecenas auctor aliquam est in
    pulvinar. Suspendisse porttitor vehicula odio, at ultrices enim congue
    ultrices. Nunc vel mauris quis quam efficitur dictum et eget ex. Praesent
    convallis euismod nulla, at finibus nulla molestie id. Nam felis risus,
    dictum maximus aliquet at, faucibus sit amet mauris. Pellentesque lobortis
    aliquam leo sit amet tincidunt. Duis nec eros ipsum.' . '<br>' .

    'Maecenas ullamcorper varius ullamcorper. Vestibulum placerat est ligula, ut
    porta ligula mattis ut. Vivamus justo nulla, viverra eu ligula a, molestie
    semper urna. Sed sed tortor congue, scelerisque ante ac, rhoncus massa.
    Duis aliquet lectus tellus. Etiam maximus odio ante, elementum dictum erat
    tristique vel. Suspendisse faucibus ex in vehicula vehicula. Vestibulum
    convallis nisi ut arcu rhoncus, ut tristique nibh luctus. Sed id aliquam
    neque. Praesent tortor lorem, posuere sit amet gravida eget, accumsan quis
    turpis. Proin bibendum metus ut accumsan consequat. Suspendisse potenti.
    Aenean in sem rhoncus, posuere sapien eget, fringilla nulla. Phasellus nibh
    ligula, molestie quis hendrerit a, feugiat sit amet purus. Etiam lorem ex,
    sagittis ac semper nec, vehicula sed velit.' . '<br>' .

    'Mauris eget elit ligula. Aliquam vitae lacinia ligula, et hendrerit leo.
    Praesent vel est a ante fermentum pharetra. Praesent id sapien vel mi
    sodales consequat vitae et justo. Vestibulum pharetra rutrum enim mattis
    imperdiet. Nam ut euismod tellus. Duis in eros sodales, convallis nulla
    rutrum, luctus dui. Sed eget feugiat arcu, a rhoncus nibh. Vestibulum
    pulvinar ligula eget risus molestie, vestibulum finibus ante rutrum.
    Pellentesque quis ligula tempor metus facilisis dignissim at ac
    felis.' . '<br>' .

    'Suspendisse tellus augue, aliquam nec pellentesque non, eleifend et ligula.
    Aliquam id risus libero. Nunc dictum varius dui, vel dapibus velit dapibus
    eget. Vivamus molestie leo vel cursus ullamcorper. Ut luctus metus id diam
    placerat, non laoreet risus rhoncus. Integer tempor mauris a commodo
    congue. Morbi a tempus arcu. Pellentesque et dignissim arcu.',
    'author' => 'hanna',
    'publishedDate' => '2018-10-17',
    'likeCounter' => 54,
  ],
  [
    'title' => 'fake news',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Etiam nec nunc eget dui pellentesque laoreet. Nullam non commodo odio.
    Curabitur et elit non lectus cursus molestie quis nec massa. Nam nec velit
    luctus, accumsan purus eu, dignissim libero. Donec eu mi in metus lacinia
    efficitur. In eu libero odio. Donec hendrerit volutpat dolor facilisis
    venenatis. Mauris gravida a nibh sit amet pellentesque. Fusce eleifend orci
    at turpis ultrices lacinia. Ut tincidunt nulla quis nibh gravida, sed
    auctor diam lobortis.' . '<br>' .

    'Nunc erat dui, interdum vel finibus non, faucibus eget dui. In hac
    habitasse platea dictumst. Donec scelerisque volutpat imperdiet. Vestibulum
    vestibulum gravida ex ut cursus. Duis feugiat rutrum mi, eget sodales leo
    lacinia convallis. Sed viverra posuere urna, id efficitur ex. Phasellus in
    erat nec erat laoreet cursus. Mauris et leo elementum metus malesuada
    rhoncus.' . '<br>' .

    'Sed vestibulum turpis in consectetur varius. Praesent at tincidunt lectus.
    Aliquam urna turpis, imperdiet eu quam in, finibus pharetra diam. Class
    aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
    himenaeos. Duis lobortis ut elit sed sollicitudin. Mauris dui magna,
    venenatis vel justo quis, fermentum tristique nibh. Nulla feugiat, nisi sed
    tincidunt fringilla, mauris lectus fringilla nisl, ut lacinia urna enim nec
    leo. Donec tempus felis ut efficitur condimentum. Nullam semper, magna ac
    facilisis lacinia, metus nisi eleifend libero, nec elementum libero neque
    at quam. Fusce eget tristique tellus. Integer fermentum vestibulum diam vel
    euismod. Proin vel mauris sit amet elit molestie condimentum sit amet sit
    amet ipsum.' . '<br>' .

    'Quisque nunc tellus, ultricies at auctor eget, convallis viverra purus.
    Nullam tempor felis in egestas tristique. Vestibulum ac nunc et felis
    facilisis dictum. Phasellus venenatis pulvinar dolor eget eleifend. Donec
    non neque justo. Maecenas eleifend pharetra est, eget maximus lectus congue
    ut. Suspendisse eu dignissim velit, ut vestibulum tellus. Duis aliquam
    ligula sed lobortis rutrum. Nunc sed pulvinar urna, elementum laoreet est.
    Suspendisse sem tortor, auctor vitae eros in, varius hendrerit urna. Nunc
    varius scelerisque nisi ultricies laoreet. Nulla et porttitor arcu, quis
    volutpat libero. Cras maximus, enim nec imperdiet tempor, lectus nisl
    pellentesque libero, sit amet rhoncus nunc quam id risus. Integer lorem
    dolor, suscipit sed facilisis sed, pellentesque nec diam.' . '<br>' .

    'Nulla facilisi. Fusce ac erat mi. Mauris in eleifend risus. Duis auctor
    turpis vitae commodo volutpat. Praesent placerat eros at metus tincidunt,
    quis malesuada nunc pellentesque. Maecenas congue a ipsum non malesuada.
    Aenean hendrerit nisl vel nibh consectetur, sit amet pretium turpis
    tempus.',
    'author' => 'hanna',
    'publishedDate' => '2018-10-17',
    'likeCounter' => 54,
  ],
  [
    'title' => 'fake news',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Nullam ac enim massa. Cras placerat ultricies diam eget imperdiet. Nam
    consectetur nulla id orci molestie, placerat tincidunt velit vulputate.
    Maecenas molestie, quam et fringilla facilisis, nisl neque tempor nulla,
    eget malesuada nisi ex scelerisque nisi. Vivamus dictum sollicitudin felis,
    et sagittis enim sagittis et. Morbi eget mauris id libero maximus
    ultricies. Nulla tristique mauris et imperdiet posuere. Ut lectus quam,
    tristique a lectus feugiat, dictum gravida metus. Fusce iaculis placerat
    dolor id facilisis.' . '<br>' .

    'Phasellus egestas lacus vel tempor blandit. Aenean eget fringilla tortor.
    Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed
    ullamcorper nisi imperdiet malesuada porttitor. Suspendisse hendrerit, ex a
    imperdiet scelerisque, nisl augue aliquam diam, vitae maximus sapien ex a
    arcu. Praesent ut lectus eleifend, blandit tellus sit amet, venenatis
    metus. Vestibulum quis est eu ipsum condimentum finibus. Donec tempor risus
    vitae magna rutrum semper sit amet molestie lacus.' . '<br>' .

    'Nullam ornare nunc orci, ut volutpat lectus bibendum ut. Vestibulum
    malesuada ipsum dignissim lectus tincidunt, vel venenatis enim bibendum.
    Suspendisse gravida arcu at egestas dictum. Proin in gravida felis. Sed sed
    sem posuere, venenatis tellus porta, gravida urna. Interdum et malesuada
    fames ac ante ipsum primis in faucibus. Morbi porta fringilla pellentesque.
    Vestibulum eget mauris congue, convallis lacus vel, accumsan augue. Nulla
    facilisi. Suspendisse sem sapien, luctus id tincidunt non, facilisis at
    tortor. Ut in purus sit amet ex elementum dignissim. Mauris at mauris sed
    est semper viverra.' . '<br>' .

    'Integer suscipit malesuada odio, eu porta massa viverra quis. Sed
    sollicitudin augue id tincidunt facilisis. Vestibulum quis arcu ut leo
    porta ornare. Integer posuere sem sit amet leo volutpat, accumsan interdum
    nisi vestibulum. Vivamus aliquet id dolor sit amet pharetra. Nulla lobortis
    eros at purus condimentum, non volutpat tellus dapibus. Mauris in
    sollicitudin purus, et vulputate nunc.' . '<br>' .

    'Fusce ut lectus at augue luctus sodales. Sed id blandit magna, in dictum
    lacus. Nam ut tellus arcu. Morbi in mauris non leo mattis volutpat. Proin
    non sem auctor, vestibulum erat et, aliquet eros. Pellentesque habitant
    morbi tristique senectus et netus et malesuada fames ac turpis egestas.
    Mauris mattis eu odio tempus dignissim. Curabitur fermentum, turpis nec
    ultricies vulputate, orci elit porttitor lacus, mollis mollis nunc urna ut
    tellus. Etiam bibendum, elit volutpat consectetur suscipit, justo elit
    cursus mi, eu varius metus velit nec sapien. Duis quis ullamcorper velit.
    Maecenas eu ex sollicitudin, commodo arcu sit amet, pulvinar nisi.',
    'author' => 'hanna',
    'publishedDate' => '2018-10-17',
    'likeCounter' => 54,
  ],
  [
    'title' => 'fake news',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
    vulputate turpis enim, at egestas tellus imperdiet eu. Curabitur feugiat
    risus sit amet mollis bibendum. Nunc in ipsum hendrerit, mattis mi at,
    sagittis mi. Vestibulum ante ipsum primis in faucibus orci luctus et
    ultrices posuere cubilia Curae; Aliquam et accumsan eros. Sed vel
    condimentum erat. Nulla sit amet ligula felis. Morbi ornare tristique
    cursus. Quisque egestas dignissim risus, vel viverra mi aliquam id.
    Praesent tincidunt interdum est et porta. Mauris facilisis pretium nisl id
    sollicitudin. Nunc vulputate dolor mauris. Vivamus ultricies erat viverra,
    viverra nisl a, lacinia ex. Morbi pharetra justo augue, sit amet vestibulum
    mi mattis at.' . '<br>' .

    'Nulla vehicula ornare dui, et sagittis nibh rutrum eget. Praesent luctus,
    ligula sit amet venenatis viverra, purus mi porttitor lorem, sed posuere
    augue dui ac mauris. Curabitur quis ex justo. In blandit ultrices dui, vel
    dignissim dui hendrerit vel. Ut nulla nibh, mattis lobortis ante non,
    placerat hendrerit purus. Aliquam iaculis in turpis vel tempor. Maecenas
    ultricies maximus interdum. Pellentesque tincidunt mi felis, at dictum nunc
    malesuada sed. Etiam at cursus diam, et bibendum sem. Cras leo nisi,
    ullamcorper at tincidunt id, rhoncus tempor massa.' . '<br>' .

    'Duis semper odio at est tempus, et convallis risus pulvinar. Nunc eu lacus
    et nisl venenatis aliquam id et ex. Quisque blandit orci in ex consequat
    fringilla. Integer viverra ante non sem semper tristique. Donec quis arcu
    justo. Ut eleifend pretium eleifend. Quisque ligula turpis, sollicitudin
    vel porttitor non, dictum in lacus. Nullam lectus est, maximus id velit at,
    consectetur aliquet leo. Vestibulum risus justo, bibendum at ornare quis,
    aliquam id dolor. Sed pharetra, libero id posuere accumsan, leo velit
    molestie lorem, nec ultricies eros dui facilisis leo. Curabitur ornare
    massa eget scelerisque bibendum.' . '<br>' .

    'Duis a enim sed mauris sagittis accumsan sed id mi. Sed vel mollis tellus,
    eu sollicitudin ante. Class aptent taciti sociosqu ad litora torquent per
    conubia nostra, per inceptos himenaeos. Etiam rhoncus quam a justo aliquet,
    eu vehicula arcu faucibus. Phasellus sem dui, dignissim at vestibulum ac,
    pretium a ligula. In blandit tristique tincidunt. Praesent in lacus tortor.
    Quisque eu convallis odio, in porta est. Aliquam ac maximus sapien.
    Maecenas non consequat magna. Lorem ipsum dolor sit amet, consectetur
    adipiscing elit. Cras sagittis vulputate nibh id congue. Maecenas urna
    eros, ornare commodo vulputate eget, finibus ut orci. Sed tincidunt, neque
    id mattis tincidunt, velit tortor venenatis nulla, dignissim egestas ante
    arcu sit amet dolor. Vestibulum ultrices, leo at ornare blandit, mi ex
    finibus sapien, quis mollis mi nisl sit amet ex. Nam pharetra erat felis,
    quis rhoncus mauris tempus ut.' . '<br>' .

    'Fusce condimentum mattis est nec vulputate. Nunc sit amet rutrum leo. Sed
    pellentesque pretium magna, in eleifend elit venenatis vel. Sed ut elit sed
    metus sodales consequat ut sed sem. Duis imperdiet, quam at dapibus
    fermentum, massa libero efficitur eros, non sodales nunc elit non massa.
    Quisque libero elit, euismod eget nulla nec, accumsan sagittis quam. Cras
    consequat vestibulum sem, a venenatis sapien aliquam at. Ut ut diam varius,
    vulputate purus vel, pulvinar odio. Aliquam erat volutpat. Curabitur porta
    aliquam velit, vel varius libero tincidunt ac. Curabitur rutrum ante ante,
    ut pharetra ex lobortis vel. Praesent vulputate, velit vitae venenatis
    iaculis, nibh mi ultricies tortor, ut cursus augue magna vitae leo.',
    'author' => 'hanna',
    'publishedDate' => '2018-10-17',
    'likeCounter' => 54,
  ],
  [
    'title' => 'fake news',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Mauris quis vulputate metus. In gravida tempus nibh, at tincidunt enim
    rutrum a. Morbi feugiat et ipsum in congue. Vestibulum facilisis risus
    risus, ac porttitor ligula tristique vel. Vestibulum sed vestibulum est,
    non facilisis lorem. Suspendisse enim justo, pharetra sed neque sed,
    dapibus interdum odio. Donec lacinia, enim nec elementum vestibulum, massa
    mauris imperdiet nulla, sit amet pretium arcu justo eget neque. Orci varius
    natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
    Sed ultrices nulla turpis, a sagittis velit dignissim ut.' . '<br>' .

    'Maecenas sed fermentum sem. Etiam a leo consectetur, pellentesque metus eu,
    viverra sem. Pellentesque non nisi vel ex pellentesque mollis et ut neque.
    Phasellus tristique, sapien a aliquet rutrum, diam neque porttitor dui, ac
    hendrerit nibh lacus id tortor. Ut sit amet risus ex. Praesent ornare ante
    metus, vel sollicitudin est dictum a. Mauris blandit posuere massa vel
    scelerisque. Class aptent taciti sociosqu ad litora torquent per conubia
    nostra, per inceptos himenaeos. In sem eros, egestas iaculis mauris in,
    tempor dictum libero. Nunc libero mi, faucibus et enim eu, suscipit
    imperdiet ante. Donec vitae lorem a tortor dignissim commodo. Nulla
    facilisi. Quisque auctor ac metus a suscipit. Aliquam mattis convallis
    laoreet.' . '<br>' .

    'Duis nec justo in lorem blandit tristique. Nullam fringilla erat vitae enim
    sodales, nec ullamcorper elit bibendum. Nulla faucibus tincidunt rhoncus.
    Sed at aliquam lorem. Nulla facilisi. Nulla facilisi. Nulla facilisi. Ut
    ullamcorper elit gravida tortor rhoncus tempus. Cras molestie molestie
    massa, et dapibus massa condimentum quis. Pellentesque tristique erat
    ipsum, a imperdiet nibh lacinia nec. Etiam at feugiat odio, eget semper
    nibh.' . '<br>' .

    'Fusce aliquet rhoncus leo eu fringilla. Nunc vitae elit ac quam feugiat
    pellentesque vitae ac ligula. Proin imperdiet sem imperdiet sem ultrices,
    sed tristique dolor suscipit. Nunc sit amet elit dictum, vulputate libero
    ac, tincidunt ante. Nulla sed purus sed nisl aliquet euismod eu ac tortor.
    Donec imperdiet arcu vitae posuere mattis. Donec nisl diam, rutrum at elit
    et, pharetra egestas velit. Etiam scelerisque tellus aliquet mi accumsan, a
    dapibus quam varius. Fusce varius, sem a tempor vestibulum, augue orci
    faucibus felis, a volutpat mi elit at nunc. Praesent cursus imperdiet
    metus, mattis mattis sem viverra egestas. Sed non pellentesque purus.
    Nullam accumsan placerat ligula non imperdiet. Phasellus sit amet dapibus
    nibh, a iaculis tellus. Mauris consectetur eros sed lectus cursus tempus id
    a orci. Vestibulum fermentum ligula at accumsan gravida.' . '<br>' .

    'Donec eget hendrerit sem, eu pellentesque massa. Donec sem ex, pharetra ut
    placerat ut, aliquam a ante. Suspendisse volutpat fringilla erat, a commodo
    nulla pharetra ut. Orci varius natoque penatibus et magnis dis parturient
    montes, nascetur ridiculus mus. Maecenas tincidunt, purus sed malesuada
    laoreet, ipsum leo viverra nisl, ut maximus nibh massa eu neque. Interdum
    et malesuada fames ac ante ipsum primis in faucibus. Donec auctor maximus
    augue, non dignissim tortor pretium ac. Praesent scelerisque libero nec
    imperdiet ultricies.',
    'author' => 'hanna',
    'publishedDate' => '2018-10-17',
    'likeCounter' => 54,
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
