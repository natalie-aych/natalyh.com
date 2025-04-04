<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="Natalyh" />
        <meta name="description" content="A new player&apos;s guide for how to play the Lightning Sorcerer specialization in PvP arenas and warzones." />
        <meta property="og:description" content="A new player&apos;s guide for how to play the Lightning Sorcerer specialization in PvP arenas and warzones." />
        <meta property="og:title" content="SWTOR 7.6 Lightning PvP Guide" />
        <meta property="og:type" content="article" />
        <meta property="article:author" content="https://natalyh.com/">
        <meta property="article:published_time" content="2022-12-27T16:49:00.000-08:00">
        <meta property="article:modified_time" content="2024-01-13T19:08:00.000-08:00">
        <meta property="article:section" content="Gaming">
        <meta property="og:image" content="https://natalyh.com/static/banner-lightning.webp" />
        <meta property="og:image:width" content="460" />
        <meta property="og:image:width" content="460" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:site_name" content="Natalyh&apos;s SWTOR Guides" />
        <meta property="og:url" content="https://natalyh.com/lightning" />
        <link rel="canonical" href="https://natalyh.com/lightning" />
        <title>SWTOR 7.6 Lightning PvP Guide / Natalyh&apos;s SWTOR Guides</title>
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
        <link rel="stylesheet" type="text/css" href="static/style.css" />
        <link rel="stylesheet" type="text/css" href="static/sprites/sorc.css" />
        <script type="text/javascript" src="static/dynamics.js" defer></script>
    </head>
    <body>
<?php
require('include/navbar.php');
?>
        <div class="bg-throne"></div>
        <div id="content">
            <header id="banner" class="banner-lightning">
                <h1>SWTOR 7.6 Lightning PvP Guide</h1>
            </header>
            <section id="playstyle">
                <h2>The Lightning Playstyle</h2>
                <p>I used to have a very angsty paragraph here about how lightning is
                    bad in 7.0, but honestly props to Shabir, this spec has begun to
                    earn its place back as a fairly squishy, but tactical jack-of-all
                    trades spec with the ability to perform to the level of its user.
                    Make no mistake, if you hear things about sorcs being overpowered
                    or broken, they are referring to madness, and at difference to
                    that spec, you will actually have to play well to do well on this
                    one. However, the gaps between specs are closing and I&apos;m
                    honestly quite satisfied with how the class balance is
                    turning out. So, if you&apos;re bored of facerolling the queue on
                    madness, or you enjoy the brutal sounds of shooting lightning
                    bolts at your enemies with every GCD, or you just aren&apos;t an
                    asshole, I&apos;ll show you how to play the sorc spec that
                    requires actual user input. In my view, lightning is by far the
                    most interesting spec in the game due to its versatility and
                    interactivity (play well, perform well; play badly, not so much),
                    and hopefully with a little nudging you&apos;ll come to enjoy it
                    as much as I do.</p>
                <p>Lightning has benefitted majorly from its buffs since the
                    expansion&apos;s launch, but make no mistake&mdash;it still
                    requires a tactical, conservative playstyle involving outplaying
                    defensive cooldowns, choosing your opportunity windows, and
                    reducing your damage taken by way of positioning. If you want to
                    feel like Emperor Palpatine and effortlessly destroy any enemies
                    in your path with torrents of force lightning, you&apos;ll likely
                    want to respec to
                    <a href="/madness">madness</a>
                    and never look back.</p>
            </section>
            <hr />
            <section id="builds">
                <h2>Viable Lightning Builds</h2>
                <p>There are essentially only two ways to build lightning without
                    becoming worm food every time a rage jugg so much as looks at you,
                    which we&apos;ll take a look at in a second. Both will use the
                    same gear and legendary implants, though with different tacticals.</p>
                <div id="build-gear">
                    <h3>Stim</h3>
                    <p>Use Advanced Kyrprax Versatile Stim. Do not pass go, do not
                        collect two hundred dollars.</p>
                    <h3>Gear and Set Bonus</h3>
                    <p>The gearing strategy is actually quite simple. For legendaries,
                        you want <strong>Gathering Storm Package</strong> and
                        <strong>Unmatched Haste Package</strong>, in that order.
                        Without Gathering Storm, Unmatched Haste barely does anything
                        for you, so prioritize getting Gathering Storm first.</p>
                    <p>For regular gear, you want the best item level gear you can get
                        at any point in time. I recommend using the <strong>1.3 GCD</strong>
                        alacrity build, which will require 6 alacrity pieces, one of
                        which is your Gathering Storm implant. Thus, in addition to
                        your legendaries, you will need to get <strong>5 alacrity</strong>
                        enhancements and <strong>3 critical</strong> enhancements.
                        The moddable gear vendor <strong>Hyde and Zeek</strong> is far
                        and away the easiest way to do this, it isn&apos;t worth
                        bothering with any other method.</p>
                    <div class="multiplex">
                        <div class="mux-frame">
                            <a href="static/stats-lightning.webp" target="_blank">
                                <img class="size-std" src="static/stats-lightning.webp" alt="Lightning Stats (332)" />
                            </a>
                            <p class="caption">Lightning Stats (332)</p>
                        </div>
                        <div class="mux-frame">
                            <a href="static/implants-sorcdps.webp" target="_blank">
                                <img class="size-std" src="static/implants-sorcdps.webp" alt="Sorc DPS Implants" />
                            </a>
                            <p class="caption">Sorc DPS Implants</p>
                        </div>
                    </div>
                    <h3>Augments</h3>
                    <p>If you use the build I&apos;ve prescribed, all of your augments
                        should be crit augments. If you&apos;re freestyling,
                        you&apos;ll want to use augments to reach the proper stat
                        thresholds, that being 3209 alacrity (for 1.3 second GCD) or
                        560 alacrity (for 1.4 second GCD); the rest of your stats go
                        into crit. Do not use accuracy on a sorcerer in PvP, it is a
                        complete waste of stats.</p>
                </div>
                <div id="build-burst">
                    <h2>The Burst Build</h2>
                    <p>The first is a tactical, burst-cannon build with a lot of roots
                        and control to attempt to minimize the uptime enemy players have
                        on you, as compared to you on them. With this build you will
                        essentially have to duel anyone that tabs onto you in order to
                        force them to disengage or die.</p>
                    <h3>Tactical Item</h3>
                    <p>You will be running the <strong>Eyrin&apos;s Haste</strong>
                        tactical, and using the instant Thundering Blast it provides
                        as a root, with a bit of burst damage baked in on top.</p>
                    <h3 class="centered">Discipline Tree</h3>
                    <div class="multiplex">
                        <div class="mux-frame">
                            <a href="static/tree-lightning1.webp" target="_blank">
                                <img class="tree size-std" src="static/tree-lightning1.webp" alt="Discipline Tree (Lightning)" />
                                <p class="caption">Discipline Tree (Lightning)</p> 
                            </a>
                        </div>
                        <div class="mux-frame">
                            <a href="static/tree-tk1.webp" target="_blank">
                                <img class="tree size-std" src="static/tree-tk1.webp" alt="Discipline Tree (Telekinetics)" />
                                <p class="caption">Discipline Tree (Telekinetics)</p>
                            </a>
                        </div>
                    </div>
                    <p>You can swap
                        <span class="sprite sprite-halted-offensive">Halted Offensive</span>
                        for either of the other options in that tier if you have a use
                        for
                        <span class="sprite sprite-chain-lightning">Chain Lightning</span>
                        (good AOE potential for example).</p>
                </div>
                <div id="build-cleave">
                    <h2>The Cleave Build</h2>
                    <p>The second build is a very tanky, but support-reliant and
                        immobile setup with the potential to output devastating AOE
                        damage and destroy an entire team. While on 90% of occasions
                        I recommend playing the first build, if you find yourself with
                        a competent tank and healer, this build can output catastrophic
                        pressure. It was mostly used for group ranked, but it&apos;s
                        worth documenting here because it can be a premade-buster with
                        proper support. With this build you should be using
                        <span class="sprite sprite-unnatural-preservation">Unnatural Preservation</span>
                        and
                        <span class="sprite sprite-chain-lightning">Chain Lightning</span>
                        as soon as they are available, and using
                        <span class="sprite sprite-cloud-mind">Cloud Mind</span>
                        to supplement your already high passive damage reduction when
                        major burst is on the way. You should also use
                        <span class="sprite sprite-force-speed">Force Speed</span>
                        and
                        <span class="sprite sprite-overload">Overload</span>
                        to create distance and take cover from enemy ranged fire, as
                        always, but you will have limited opportunities to do so with
                        this build, and you will be reliant on support from your team.</p>
                    <h3>Tactical Item</h3>
                    <p>You will be running the <strong>Elemental Convection</strong>
                        tactical, which will reset the cooldown of
                        <span class="sprite sprite-chain-lightning">Chain Lightning</span>
                        when you use
                        <span class="sprite sprite-volt-rush">Volt Rush</span>.</p>
                    <h3 class="centered">Discipline Tree</h3>
                    <div class="multiplex">
                        <div class="mux-frame">
                            <a href="static/tree-lightning2.webp" target="_blank">
                                <img class="tree size-std" src="static/tree-lightning2.webp" alt="Discipline Tree (Lightning)" />
                                <p class="caption">Discipline Tree (Lightning)</p> 
                            </a>
                        </div>
                        <div class="mux-frame">
                            <a href="static/tree-tk2.webp" target="_blank">
                                <img class="tree size-std" src="static/tree-tk2.webp" alt="Discipline Tree (Telekinetics)" />
                                <p class="caption">Discipline Tree (Telekinetics)</p>
                            </a>
                        </div>
                    </div>
                    <h3>Rotational Adjustment</h3>
                    <p>With this build you will want to adjust your rotation to use
                        <span class="sprite sprite-chain-lightning">Chain Lightning</span>
                        and
                        <span class="sprite sprite-volt-rush">Volt Rush</span>
                        in sequence immediately after every
                        <span class="sprite sprite-thundering-blast">Thundering Blast</span>.
                        This will ensure you never delay the proc, always do maximum
                        cleave damage, and proc your
                        <span class="sprite sprite-unnatural-preservation">Unnatural Preservation</span>
                        quicker. If there are multiple consistent targets, you will
                        also want to apply
                        <span class="sprite sprite-affliction">Affliction</span>
                        to all of them, as you will passively refresh it resulting in
                        more damage.</p>
                </div>
            </section>
            <hr />
            <section id="offense">
                <h2>Offense</h2>
                <h3>Abilities</h3>
                <p>Lightning has six rotational rotational attacks which you will use
                    frequently. These are
                    <span class="sprite sprite-affliction">Affliction</span>,
                    <span class="sprite sprite-thundering-blast">Thundering Blast</span>,
                    <span class="sprite sprite-lightning-flash">Lightning Flash</span>,
                    <span class="sprite sprite-crushing-darkness">Crushing Darkness</span>,
                    <span class="sprite sprite-chain-lightning">Chain Lightning</span> or
                    <span class="sprite sprite-halted-offensive">Halted Offensive</span>,
                    <span class="sprite sprite-shock">Shock</span>, and
                    <span class="sprite sprite-lightning-bolt">Lightning Bolt</span>.
                </p>
                <p>There are also two non-rotational abilities that you may use for
                    niche purposes or with certain builds (such as the cleave build).
                    These are
                    <span class="sprite sprite-force-lightning">Force Lightning</span>
                    and
                    <span class="sprite sprite-volt-rush">Volt Rush</span>.</p>
                <h3>Pre-Rotation: Apply Affliction</h3>
                <p>Before attacking a target, ensure that it has your
                    <span class="sprite sprite-affliction">Affliction</span>
                    applied to it. Turning on <em>&quot;Highlight Personal Debuffs&quot;</em>
                    in the UI editor is a very easy way to track this (it will glow
                    gold.) Your affliction will refresh, so you don&apos;t need to use
                    it in rotation, but attacking a target without it on is very very
                    bad. Affliction causes your
                    <span class="sprite sprite-thundering-blast">Thundering Blast</span>
                    to autocrit, which accounts for a great deal of your burst damage.
                    Do not forget it!
                </p>
                <h3 id="ocds">Offensive Cooldowns</h3>
                <p>You have two offensive cooldowns on sorc, these are
                    <span class="sprite sprite-recklessness">Recklessness</span>
                    and
                    <span class="sprite sprite-polarity-shift">Polarity Shift</span>.</p>
                <p><span class="sprite sprite-recklessness">Recklessness</span>
                    will make your next two abilities crit, guaranteed,
                    but it won&apos;t increase their critical bonus damage like a
                    normal autocrit would. The exception to this rule, however, is
                    <span class="sprite sprite-thundering-blast">Thundering Blast</span>.
                    Since Thundering Blast already autocrits on targets that have your
                    <span class="sprite sprite-affliction">Affliction</span>
                    on them, Recklessness will just <strong>increase that damage by
                    60%</strong>. That is a large number, and it stacks with your other
                    offensive cooldowns. As a rule of thumb, you want to use
                    <span class="sprite sprite-recklessness">Recklessness</span>
                    with the first
                    <span class="sprite sprite-thundering-blast">Thundering Blast</span>
                    available after it comes off cooldown, and then use one more
                    hard-hitting ability to consume the second charge. Typically the
                    second charge will be spent on
                    <span class="sprite sprite-chain-lightning">Chain Lightning</span> or <span class="sprite sprite-halted-offensive">Halted Offensive</span>
                    since these do the most damage per activation after Thundering
                    Blast, but you can also use it with
                    <span class="sprite sprite-lightning-flash">Lightning Flash</span>
                    or
                    <span class="sprite sprite-unnatural-preservation">Unnatural Preservation</span>
                    depending on your health level and the procs you have available.</p>
                <p><span class="sprite sprite-polarity-shift">Polarity Shift</span>
                    does a couple of things. First, literally just increase all your
                    damage by 20% for 20 seconds. Pretty nice. Second, makes you immune
                    to being interrupted or having your casts slowed in any way. Very
                    nice. Third, it increases your alacrity (as in, your cast and GCD
                    speed) by 20%. Oh and did I forget to mention? It doubles your
                    movement speed. Just casual. Basically, this is your godmode button.
                    It can turn the tide of duels, let you kite out enemies so badly
                    you literally break combat and regen to full, get you kills on
                    unsuspecting stealthers&hellip; the possibilities are truly endless.
                    That said, you&apos;ll normally use it in the opener to hit like a
                    goddamn truck, and after that you can find creative uses for it the
                    second time it comes up. Push this button off cooldown while
                    doing damage.</p>
                <h3 id="rotation">Rotation</h3>
                <p>The &quot;rotation&quot; for Lightning is just a priority system.
                    Select the attack highest up in the list that's available at any
                    given time, provided the stated conditions apply.</p>
                <ol class="rotation-list">
                    <li value="-1"><span class="sprite sprite-affliction">Affliction</span>
                                  &mdash; if not already on target</li>
                    <li value="0"><span class="sprite sprite-polarity-shift">Polarity Shift</span>
                                  and
                                  <span class="sprite sprite-recklessness">Recklessness</span>
                                  &mdash; read <a href="#ocds">above</a></li>
                    <li><span class="sprite sprite-thundering-blast">Thundering Blast</span></li>
                    <li><span class="sprite sprite-halted-offensive">Halted Offensive</span>
                        &mdash; if you just used
                        <span class="sprite sprite-recklessness">Recklessness</span></li>
                    <li><span class="sprite sprite-lightning-flash">Lightning Flash</span></li>
                    <li><span class="sprite sprite-crushing-darkness">Crushing Darkness</span>
                        &mdash; only with proc from
                        <span class="sprite sprite-lightning-flash">Lightning Flash</span></li>
                    <li><span class="sprite sprite-shock">Shock</span>
                        &mdash; only with
                        <span class="sprite sprite-crushing-darkness">Crushing Darkness</span>
                        on the target</li>
                    <li><span class="sprite sprite-chain-lightning">Chain Lightning</span> or
                        <span class="sprite sprite-halted-offensive">Halted Offensive</span>
                        &mdash; only with proc from
                        <span class="sprite sprite-thundering-blast">Thundering Blast</span></li>
                    <li><span class="sprite sprite-lightning-bolt">Lightning Bolt</span></li>
                </ol>
                <h3 id="target-selection">Target Selection</h3>
                <p>As an arena player, your first target should obviously be any
                    that comes in egregiously unprepared and doesn&apos;t pop their
                    defensive cooldowns properly. However, barring a situation like
                    that, it&apos;s useful to know which classes are easiest for you
                    to hit in this spec. These will be as follows:
                    <ol>
                        <li><strong>Snipers.</strong>
                            Already in 6.0 Lightning Sorcs could destroy
                            snipers through pretty much all of their cooldowns, and
                            in 7.0 the only thing that&apos;s changed is that they
                            have fewer of them. Watch for rolls and avoid hitting your
                            major burst into them, but otherwise a sniper is basically
                            a parse dummy. Important to note, in 7.3 sniper received
                            some passive healing while sitting in cover, but as long
                            as you're able to keep up with the sniper your damage will
                            far outpace this healing and force them to run (and
                            therefore not receive said healing). Just don&apos;t
                            relent in your pressure (and remember to chase phase walk)
                            and the sniper is dead meat.</li>
                        <li><strong>Mercenaries.</strong>
                            Mercs don&apos;t actually have bad defensives,
                            but the damage toolkit you get as Lightning is essentially
                            a hard counter to their best protections. Since
                            <span class="sprite sprite-chain-lightning">Chain Lightning</span> / <span class="sprite sprite-halted-offensive">Halted Offensive</span>
                            is counted as AOE (area of effect) damage by the game&apos;s
                            internal mechanisms, it can be hit through a merc&apos;s
                            reflect for the full damage, and without healing the merc.
                            It also will not give the merc healing stacks on Energy
                            Shield. The ideal combination to hit through either of
                            these cooldowns is a hardcasted
                            <span class="sprite sprite-chain-lightning">Chain Lightning</span> / <span class="sprite sprite-halted-offensive">Halted Offensive</span>,
                            followed by a full
                            <span class="sprite sprite-force-storm">Force Storm</span>,
                            followed by another
                            <span class="sprite sprite-chain-lightning">Chain Lightning</span> / <span class="sprite sprite-halted-offensive">Halted Offensive</span>.
                            You can also apply
                            <span class="sprite sprite-polarity-shift">Polarity Shift</span>
                            to the entire combination, and
                            <span class="sprite sprite-recklessness">Recklessness</span>
                            after the hardcast in order to cause additional devastation.
                            After this combo you can go into casting
                            <span class="sprite sprite-thundering-blast">Thundering Blast</span>
                            since at this point the DCD will be over by the time the
                            cast finishes. The ideal situation to surprise a merc in
                            this way is to hold your offensive cooldowns (or even wait
                            to open) until they have popped reflect, and then use the
                            combination above to drop them at least 200k HP through it.
                            Kolto Overload, on the other hand, cannot be easily
                            counterplayed unless the merc pops it at too low of a
                            health percentage, so it&apos;s generally best to swap
                            targets when it is popped (only for the 8 seconds though).</li>
                        <li><strong>Concealment Operatives</strong>
                            (note: make sure you know their
                            spec.) The root profile of Lightning&apos;s attacks is
                            ideal for making a conc op&apos;s life hell. When hitting
                            a conc op, make sure to delay your GCD a bit (like 0.1s)
                            in order to determine whether they will spend their GCD
                            on a roll (which will resist whatever you use), and then
                            if and only if they use it on something else (like an
                            attack of their own, or a kolto probe), use offensive
                            abilities on them. If they roll, you can use a heal on
                            yourself or a teammate to pass the empty GCD, or
                            <span class="sprite sprite-consuming-darkness">Consuming Darkness</span>
                            to regenerate some force (only if you are low on it.)
                            Ensure that you keep the operative rooted with
                            <span class="sprite sprite-thundering-blast">Thundering Blast</span>
                            and
                            <span class="sprite sprite-overload">Overload</span>
                            so that you can use casted attacks on them. Generally you
                            will want to start with Thundering Blast because its
                            cooldown is shorter, and re-root with Overload if the
                            operative purges the effect via Evasion or Holotraverse.
                            If the operative breaks the second root, you can apply a
                            third whenever your
                            <span class="sprite sprite-thundering-blast">Thundering Blast</span>
                            comes off cooldown, and then have your way with the
                            operative. It is also fairly safe to stun an operative
                            while they are rooted, as they cannot roll it. To maximize
                            control, I recommend using one casted attack while the
                            operative is rooted, and following it with
                            <span class="sprite sprite-electrocute">Electrocute</span>
                            and 3 more hard-hitting attacks. See the
                            <a href="#lock-down">&quot;Locking Down&quot;</a>
                            section below for one very effective way to chain your
                            controlling effects (of several possible).</li>
                        <li><strong>Powertechs.</strong>
                            PT defensives are almost entirely armor-based,
                            which means that your
                            <span class="sprite sprite-thundering-blast">Thundering Blast</span>
                            will hit straight through them for full damage. You can
                            mostly parse on a powertech like a training dummy, but
                            there are a few things to watch out for. If the powertech
                            pops Emergency Power (the glowing white bubble around
                            themselves), treat it like an operative rolling for 2 GCDs
                            (ignore them, do something else that&apos;s useful), and
                            then go back to dumpstering.
                            In a situation with healers or tanks, you&apos;re unlikely
                            to kill a PT through Energy Shield (the blue bubble), so
                            it&apos;s worth swapping off. Otherwise, you can go
                            straight through with no concern.
                            The treatment of Kolto Overload, however, depends on the
                            spec of the PT. In AP, if they pop Kolto Overload at high
                            health, they will most likely live through it, so you
                            should swap targets for 8 seconds. If they pop it at low
                            (sub-20%) health, you can definitely kill them through it
                            if your team has eyes, so full speed ahead.
                            If the PT is pyrotech (which you&apos;ll know because
                            there will be fire everywhere), however, they have a
                            passive that grants them ridiculous damage reduction while
                            kolto is running, and you will need to swap off.
                            Killing a powertech is slow, but you
                            will almost always succeed. PTs are much more of a
                            defensive than an offensive problem. It should be noted,
                            however, that killing a pyro PT through any kind of
                            support is miserably slow due to their cooldown reduction
                            on Kolto Overload, and their damage profile is generally
                            tame enough to warrant choosing another target in this
                            situation.</li>
                        <li><strong>Juggernauts.</strong>
                            Juggs are like PTs but with more healing and
                            less potential to kill anything. You <em>can</em> go them
                            and much like PTs they will eventually die, but normally
                            your team will kill them anyway and it&apos;s more useful
                            to use your damage profile on something that&apos;s a
                            bigger threat. That said, if your teammates are ignoring
                            a jugg that&apos;s low or has spent DCDs, certainly don&apos;t
                            just let it heal.
                        </li>
                        <li><strong>Assassins.</strong>
                            Killing sins takes forever. They have three
                            health bars and normally will hide in stealth until getting
                            a fourth. However, they are such an offensive threat that
                            normally it is actually advantageous to sacrifice that
                            damage in order to take them off the playing field. It
                            can be equally useful to just peel them off when they
                            first come out of stealth and deny their autocrit window,
                            however, without wasting damage on them (which they will
                            just heal).</li>
                        <li><strong>Marauders.</strong>
                            Killing maras is a nightmare for your damage
                            profile. They have great ways to reduce and negate the
                            types of damage sorcs deal, and will most likely attempt
                            a regen once they are finally low as well. You must chase
                            and deny them this regen or your odds of winning the round
                            plummet. Arena teammates almost never assist with chasing,
                            so this can be a brutalizing exercise since marauders are
                            a faster class than sorcs. It can be done with enough
                            persistence, however.</li>
                        <li><strong>Lethality Operatives.</strong>
                            Don&apos;t waste your damage, they
                            will just heal through all of it.</li>
                    </ol>
                </p>
                <h3 id="chasing">Chasing</h3>
                <p>When you start investing damage into a target, it&apos;s incredibly
                    important that you do not then allow this target to escape and
                    heal, wasting all of the resources you spent damaging them. If you
                    are not the enemy team&apos;s focus target, it is your
                    responsibility to chase down players that attempt to run away from
                    your team, such as marauders using their camouflage, or snipers
                    and other sorcs using
                    <span class="sprite sprite-phase-walk">Phase Walk</span>. There
                    are very common locations on each map where players go to try and
                    heal, but until you learn these there are a number of ways to
                    track these players down by hand.</p>
                <h4>Minimap</h4>
                <p>The minimap will show a red dot for each enemy player in combat
                    with you. If one of these is far to one side, chances are it is a
                    player trying to escape combat, and you should chase it down.</p>
                <h4>Name-Clicking</h4>
                <p>Camouflage will forcibly remove a player from your target, making
                    them difficult to find again. However, spam clicking their name in
                    the enemy players frame can counteract this, causing you to
                    re-target them as soon as they reappear. You can then do a quick
                    walk in all four directions, and whichever one makes the number
                    of meters between you and them (shown on the player frame)
                    decrease is the direction you should head in order to chase them.</p>
                <h4>Seeing Dots</h4>
                <p>Seeing as we are applying a permanent dot to our targets before
                    hitting them, it is also quite common to see yellow flytext
                    numbers through walls or in remote parts of the map. This means
                    an enemy player is hiding behind said wall, and you should finish
                    them off.</p>
                <h3 id="lock-down">Locking Down</h3>
                <p>When a player runs from you, the majority of the time they will
                    attempt to keep running once you reach them. Since we are speccing
                    into two different roots, the following combination of abilities
                    will allow you to prevent a player from moving for an obscene
                    amount of time, and may also cause them to throw a rage fit. You
                    can also stun them afterward with
                    <span class="sprite sprite-electrocute">Electrocute</span>
                    if you have it available in order to get maximum lockdown value.
                </p>
                <ol>
                    <li><span class="sprite sprite-overload">Overload</span></li>
                    <li><span class="sprite sprite-affliction">Affliction</span>
                        (if it&apos;s fallen off) or
                        <span class="sprite sprite-lightning-flash">Lightning Flash</span>
                        or
                        <span class="sprite sprite-dark-heal">Dark Heal</span>
                        (if your health is under 100%) or Any Instant Attack</li>
                    <li><span class="sprite sprite-thundering-blast">Thundering Blast</span></li>
                    <li><span class="sprite sprite-crushing-darkness">Crushing Darkness</span></li>
                    <li><span class="sprite sprite-chain-lightning">Chain Lightning</span> or
                        <span class="sprite sprite-halted-offensive">Halted Offensive</span></li>
                </ol>
                <h3 id="getting-owned">Getting Owned</h3>
                <p>If you are a new player chasing down a more experienced one, there
                    is a good chance they will be able to turn it around on you, even
                    with a significant health disadvantage. If that happens, it&apos;s
                    advisable to disengage in order to survive&mdash;a stalemate is
                    better for your team than being down a player. However, you should
                    take note of what happened and how they managed to do what they
                    did. There are a million niche kiting tricks in this game and
                    the only way to learn them is going head-to-head with better
                    players. Remember: being beaten is not the same thing as throwing.
                    Throwing would be not attempting to chase the player at all. Just
                    recognize when you&apos;ve been beaten, learn from your mistakes,
                    and you will improve dramatically in a short period of time.</p>
            </section>
            <hr />
            <section id="defense">
                <h2>Defense</h2>
                <p>If you&apos;ve ever watched very good sorcs like
                    <a href="https://www.youtube.com/watch?v=9u9OEtQPkWY">Durmoth</a>
                    and
                    <a href="https://www.youtube.com/watch?v=wZvA4knb12M">Lyala</a>
                    play in 5.0 and 6.0, you will notice they play with a very
                    peculiar style&mdash;they play slowly, tactically, control their
                    opponents extensively, use line-of-sight objects to minimize
                    incoming damage, and only expose themselves to fire when their
                    targets are particularly vulerable, having no defensive cooldowns
                    active. This is the prototypical way to play a sorcerer. You have
                    no particularly notable defensive cooldowns of your own, only
                    repositioning tools and stun breakers, so you must play
                    intelligently and leverage your positioning and your ability to
                    move while not stunned in order to outplay the DCDs of your
                    opponents. In 6.0 this playstyle was essentially optional. It was
                    advantageous, but you could fare pretty well just pretending to be
                    a marauder and charging in nose-first. In 7.0, if you wish to play
                    Lightning, it is absolutely mandatory. Your positioning is critical
                    because your ability to regenerate health is extremely limited, so
                    taking unnecessary damage can cripple you for the remainder of the
                    round. Likewise, since your health and force pool is so limited,
                    when opportunities to break combat and regenerate them with
                    <span class="sprite sprite-seethe">Seethe</span>
                    present themselves, they are invaluable.
                </p>
                <h3 id="unnatural-pres"><span class="sprite sprite-unnatural-preservation">Unnatural Preservation</span></h3>
                <p>Before we even get into the macro-gameplay of sorc defensives,
                    let me introduce you to my number one pet peeve when watching other
                    sorcs play. This is my friend
                    <span class="sprite sprite-unnatural-preservation">Unnatural Preservation</span>.
                    What Unnatural Preservation does, is heal you. No strings attached.
                    It does not cost force, it does not use a GCD, it has a very short
                    cooldown, and you can even spend
                    <span class="sprite sprite-recklessness">Recklessness</span>
                    on it to make it heal more. The sooner you use it, the faster it
                    comes off cooldown, and the sooner you can use it again. By
                    delaying this you are literally wasting healing for no reason,
                    and also causing me to despise you on a personal level. In short,
                    if you are below 90% health,
                    <strong>PUSH THIS FUCKING BUTTON IMMEDIATELY</strong>.
                    While we&apos;re at it, do the same thing with
                    <span class="sprite sprite-static-barrier">Static Barrier</span>,
                    even if you&apos;re at 100%. It&apos;s a shield so it can&apos;t
                    over-heal.
                </p>
                <h3 id="stun-debuff"><span class="sprite sprite-electrocute">Stun Debuff</span></h3>
                <p>As of 7.4, targets that you stun with your
                    <span class="sprite sprite-electrocute">Electrocute</span>
                    do 25% less damage for 10 seconds. This is a lot of damage
                    reduction and it lasts for a long time. You very much want to make
                    sure this is applied to whoever will do the most damage on the
                    enemy team, as soon as it comes off cooldown. If there is a
                    powertech, use it on the powertech and he will cry. If there are
                    multiple powertechs, use it on the best powertech and you will cry
                    slightly less about being the target of multiple powertechs.
                </p>
                <h3 id="major-dcds">Major Defensive Cooldowns</h3>
                <p>As a sorc, you have three (two and a half, really) defensive
                    cooldowns that will help you out of big trouble. These are
                    <span class="sprite sprite-phase-walk">Phase Walk</span>,
                    <span class="sprite sprite-force-barrier">Force Barrier</span>, and
                    <span class="sprite sprite-unbreakable-will">Unbreakable Will</span>.
                    The ideal cooldown rotation would have you use
                    <span class="sprite sprite-phase-walk">Phase Walk</span>
                    the first time you are stunned,
                    <span class="sprite sprite-unbreakable-will">Unbreakable Will</span>
                    some time later if you are caught up to and stunned again, and
                    <span class="sprite sprite-force-barrier">Force Barrier</span>
                    on whitebar if you are restunned after that. This is ideal, but
                    not always possible, so at minimum make sure to use all three of
                    these before you die. Major cooldowns are really only necessary
                    when you are caught in a stun (or a very nasty root), however,
                    so when you are un-stunned you should be using
                    <span class="sprite sprite-force-speed">Force Speed</span>
                    to repositioning yourself to safety.
                </p>
                <h3 id="kiting">Kiting</h3>
                <p>Your primary defensive strategy on sorc is the art of positioning
                    yourself in such a way that you take as little damage as possible
                    from enemy players. This art is called kiting. In some instances,
                    kiting is very simple. For example, a concealment operative cannot
                    do damage to you if he cannot come within 4 meters of you.
                    Therefore, stay out of that range most of the time and you are
                    safe. Likewise, an arsenal merc can do very little damage to you
                    if he cannot see you through a wall. Therefore, put an object
                    between you and the merc and you should be alright. These are the
                    basic premises for kiting melee and ranged classes&mdash;against
                    melee compositions, you want to place a lot of distance between
                    you and the enemy. Against ranged compositions, you want to place
                    an object between you and the enemy.</p>
                <h4>Mixed Comps</h4>
                <p>In situations where the enemy team is a mixed composition of
                    melee and ranged classes, however, the issue becomes much
                    more complicated. Ideally, you want to place both distance, and
                    an LOS object between yourself and the enemy. Generally the way
                    to do this is to time your usage of
                    <span class="sprite sprite-force-speed">Force Speed</span>
                    such that you can use it to run away, and then turn a corner of
                    some kind. Some maps are great for this, and others are abysmal.
                    In the latter case, you will have to use some creativity in
                    tandem with the strategies described below in order to escape
                    a tricky situation where you would take unnecessary damage.</p>
                <h4>Baiting Knockbacks</h4>
                <p>One of the greatest ways to juke a team of bad players is to
                    bait them into being knocked off a ledge they can&apos;t easily
                    climb again. The way to execute this is generally to use
                    <span class="sprite sprite-force-speed">Force Speed</span>
                    to take you to a place on the edge of a ledge, and then turn your
                    camera and quickly use
                    <span class="sprite sprite-overload">Overload</span>
                    on the group of enemies that follows. Excellent spots for this
                    include the vent landing area on Mandalorian Battle Ring, the
                    ramps on Orbital Station, and the hut doorways overlooking the pit
                    on Tatooine Canyon.</p> 
                <h4>Grouping Enemies</h4>
                <p>If there are multiple players chasing you, you always want to be
                    hitting the closest one in order to slow it down, and keep the
                    enemies in a nice neat clump. Clumps allow you to use knockbacks,
                    crowd control, or even the AOE slow from your
                    <span class="sprite sprite-chain-lightning">Chain Lightning</span>
                    on multiple targets at once, multiplying their effectiveness.</p>
                <h4>Crowd Control</h4>
                <p>Speaking of which, another great set of tools to ditch chasers are
                    crowd control effects. Since we&apos;ve lost Whirlwind with the
                    launch of 7.0, a sorc&apos;s CC kit essentially consists of
                    <span class="sprite sprite-electrocute">Electrocute</span>
                    and Seismic Grenades, which you can buy from the GTN. Electrocute
                    should generally be used when there is a single leading chaser
                    catching up to you in order to keep him in line with the pack,
                    while Seismic Grenades can be used to incapacitate the entire pack
                    at once while you make a getaway. However, if a player instantly
                    breaks your Electrocute stun, you can immediately follow it with
                    a Seismic Grenade knowing they will then have to sit for its
                    entire duration, and you can use this time to create distance or
                    heal yourself (the former is recommended).</p>
                <h4>Phase Walk Usage</h4>
                <p>While the rest of these tools are alright,
                    <span class="sprite sprite-phase-walk">Phase Walk</span>
                    is by far the best defensive ability sorcerers have. Since its
                    cooldown is the shortest of our major DCDs, we would prefer to
                    use it first in order to get a second one off before dying, and
                    in order to do that we need to have it in a solid position before
                    we ever head into combat. This means we cannot sit in spawn like
                    juggernauts or powertechs like to, as being caught without phase
                    walk set is a death sentence.</p>
                <p>When starting off a round as the kill target, the ideal opening is
                    to set Phase Walk at a high level, drop to a lower level, have
                    the enemy team follow you down, and then activate Phase Walk and
                    leave them sitting on the bottom floor like idiots, wasting their
                    entire opening volley of damage (which usually is more than they
                    will do for the rest of the match). This late into the game&apos;s
                    life-cycle, however, people are beginning to get wise to Phase
                    Walk strategies, so after activating it you are likely to be
                    chased. For this reason, ideal Phase Walk spots are both at high
                    altitude, and allow you to escape in multiple directions depending
                    which the enemy team tries to chase you from. From here you can
                    just run farther away and preserve the distance you&apos;ve created
                    until you drop combat and can
                    <span class="sprite sprite-seethe">Seethe</span>
                    yourself to full. This is an ideal situation and will not be
                    possible every time, but at least try to leave yourself room to
                    run away from your phase in the event it gets camped or chased.</p>
                    <p><strong>TL;DR:</strong> Don&apos;t Phase Walk into a corner, and don&apos;t Phase
                    Walk where you can be leapt to. I leave the rest up to your
                    imagination.</p>
                <h4>Self-Healing</h4>
                <p>As a Lightning Sorc you have several ways to heal yourself apart
                    from the aforementioned
                    <span class="sprite sprite-unnatural-preservation">Unnatural Preservation</span>,
                    however, neither is very effective on its own. On one hand,
                    <span class="sprite sprite-resurgence">Resurgence</span> will heal
                    you for a pretty pitiful amount of health, but it can be used on
                    the move and the small amount does add up, so it&apos;s worth
                    using when you don&apos;t have anything better to do. Similarly,
                    <span class="sprite sprite-dark-heal">Dark Heal</span> will heal
                    you for a slightly less, but still, pitiful amount of health, but
                    must be casted and costs an absolute dick ton of force. I honestly
                    do not recommend stopping to cast this unless no one is following
                    you. On the surface, the options seem a little bleak, and they
                    are.</p>
                <p>Fortunately, in 7.1, Lightning received a bit of a saving grace in
                    the form of a passive which makes our
                    <span class="sprite sprite-thundering-blast">Thundering Blast</span>
                    proc
                    <span class="sprite sprite-dark-heal">Dark Heal</span>,
                    making it heal for 30% more and activate instantly. This means if
                    you are rooting people properly, you should have these banked up
                    in order to help you recover from any mistakes you might make in
                    terms of avoiding damage. (Note: it is still not enough to attempt
                    to sit in the thick of things and face-tank, though.)</p>
                <h4>Force Management</h4>
                <p>Now, spamming dark heal procs of course raises the issue that it
                    completely annihilates your force. There are two ways to manage
                    this, and most people will do a combination of both. The first is
                    to be extremely religious about avoiding damage, thus minimizing
                    the need to heal and maximizing the frequency of combat drops,
                    allowing you to regenerate force with
                    <span class="sprite sprite-seethe">Seethe</span>.
                    This requries a great deal of experience and skill to pull off,
                    however, and also generally relies on your opponent(s) being
                    somewhat garbage.</p>
                <p>The second strategy is much simpler&mdash;while you are running
                    away and don&apos;t have other instant-cast abilities to use,
                    spam
                    <span class="sprite sprite-consuming-darkness">Consuming Darkness</span>
                    a bunch of times to give you force back. It isn&apos;t the
                    cleanest solution, but it will save your life and improve your
                    winrate, so you may as well do it.</p>
                <h4>General Positioning</h4>
                <p>In addition to active kiting, it is also important as a sorc to be
                    prepared to begin kiting at any second. Being caught out of
                    position (meaning out of range of your Phase Walk or away from
                    any objects you could use to break line-of-sight) can quickly get
                    you killed, or at best force you to spend your defensive cooldowns
                    in an order that greatly reduces your lifespan. Therefore,
                    positioning responsibly while you play sorc entails knowing your
                    Phase Walk range, moving your Phase Walk if you need to chase
                    out of that range, and always staying near an object you can use
                    to break casts and channels targeting you (unless you are in the
                    middle of
                    <span class="sprite sprite-force-speed">Force Speed</span>).</p>
                <h4>Pole-Knocking</h4>
                <p>One last trick which can be very helpful is what I call
                    pole-knocking, that is, getting around a pole, and then doubling
                    back to knock away an enemy that tries to follow. This is a very
                    specific technique but its potential is high, so here is a video
                    to demonstrate me doing it to a jugg.</p>
                <div class="multiplex">
                    <iframe class="video mux-frame" src="https://www.youtube.com/embed/u2LC1prnqs8?start=380" allowfullscreen></iframe>
                </div>
                <h3>Damage Reduction</h3>
                <p>At difference to the other sorc specs, Lightning in particular
                    has a fair bit of passive damage reduction which you can use to
                    soften incoming attacks if you maintain it properly. In 6.0 and
                    7.0, damage reduction is always much less important than damage
                    avoidance, as you will be hit for more damage by exposing yourself
                    than you will be able to reduce, but if you are able to have both
                    then you should do so.</p>
                <p>Lightning has three sources of passive DR:</p>
                <ul>
                    <li>Activating
                        <span class="sprite sprite-lightning-bolt">Lightning Bolt</span>
                        will grant stacks of 5% damage reduction up to three times, for a
                        total of 15%.</li>
                    <li>Activating
                        <span class="sprite sprite-thundering-blast">Thundering Blast</span>
                        will grant one more stack of 5% damage reduction.</li>
                    <li>Utilizing
                        <span class="sprite sprite-static-barrier">Static Barrier</span>
                        on cooldown will grant a final stack of 5% damage reduction.
                        Static Barrier also absorbs a bit of damage, so you should
                        make it a habit to use this whenever it is available, like
                        <span class="sprite sprite-unnatural-preservation">Unnatural Preservation</span>.
                    </li>
                </ul>
                <p>Some quick napkin math tells us that maintaining all this properly will
                    increase our damage reduction by 25%. That&apos;s as much as a powertech&apos;s energy
                    shield, except we get it with 100% uptime and no cooldown. Maintaining this DR
                    is critical in prolonged engagements or when support roles are involved, and
                    plenty nice to have the rest of the time as well.</p>
                <p>The easiest way to maintain your DR is to use all three instant-cast
                    <span class="sprite sprite-lightning-bolt">Lightning Bolt</span>s
                    procced by
                    <span class="sprite sprite-force-speed">Force Speed</span>
                    in the opener, and then another
                    <span class="sprite sprite-lightning-bolt">Lightning Bolt</span>
                    each time that
                    <strong>Subversion</strong> is procced. This effectively means, use three in
                    the opener and then hit
                    <span class="sprite sprite-lightning-bolt">Lightning Bolt</span>
                    whenever it randomly glows gold. The remainder of your
                    <strong>Convection</strong> procs from
                    <span class="sprite sprite-force-speed">Force Speed</span>
                    can be spent on
                    <span class="sprite sprite-thundering-blast">Thundering Blast</span>,
                    which will also glow gold.
                </p>
                <p>In addition to this passive DR, which should be active at all times,
                    the builds I have recommended have access to active DR every 45
                    seconds by way of
                    <span class="sprite sprite-cloud-mind">Cloud Mind</span>.
                    Cloud Mind grants 25% additional damage reduction (total: 50%) for 6 seconds,
                    and should be used when you anticipate big incoming burst damage.
                    This is an intuition you will develop as you play, but a good rule
                    of thumb is that whenever you are snared or rooted (whenever it&apos;s
                    hard for your character to move freely), big damage is on the way
                    shortly.</p>
                <h3>Surviving Net</h3>
                <p>Many new sorcs think they have everything figured out and then
                    suddenly find all their major DCDs grayed out and themselves
                    globaled. This is the result of an ability that Mercenaries have
                    called <strong>Electro Net</strong>. Electro Net lasts 9 seconds,
                    deals a great deal of damage over time, and disables
                    <span class="sprite sprite-force-speed">Force Speed</span>,
                    <span class="sprite sprite-phase-walk">Phase Walk</span>, and
                    <span class="sprite sprite-force-barrier">Force Barrier</span>.
                    It can be dispelled by using
                    <span class="sprite sprite-unbreakable-will">Unbreakable Will</span>,
                    but you will have to save your breaker for this purpose. The ideal
                    maneuver when dispelling net in this way is to then Force Speed to a
                    safe location and heal through the dot damage.</p>
                <p>An alternative strategy is to try and tank the net without using
                    breaker by stepping behind the line-of-sight object that you
                    should have handy, and using all your heals and damage reductions
                    at once. It will generally also require stunning, CCing, or
                    pole-knocking one or more of the players attacking you during this
                    time to pull off as well. I do not recommend this strategy to new
                    players, especially because in this spec your ability to
                    regenerate those resources is extremely limited, but you should be
                    aware of the possibility in case of emergency (or multiple nets).
                    If there are multiple nets you should try to tank the first one
                    so you can break the second.</p>
                <h3>Playing With Supports</h3>
                <p>Finally, having support roles on your team will change the way in
                    which you kite. Since the supports need to be able to guard or
                    heal you, you will need to stay within their effective range in
                    order for this to work, which is quite a small arena to play in.
                    Therefore, we will need to make some adjustments to our kiting
                    style.</p>
                <h4>Kiting With Tanks</h4>
                <p>With a tank on your team, you should play as if the enemy team is
                    entirely ranged (regardless of what it actually is). Guard does
                    not require line of sight to function, and thus you should make
                    yourself impossible to catch by playing ring-around-the-rosy with
                    an object and applying slows to the players chasing you in order
                    to reduce the rate of incoming damage.</p>
                <h4>Kiting With Healers (or Both)</h4>
                <p>Healing, on the other hand, does require line of sight on the
                    target, so when you have a healer you should (almost always) play
                    entirely in the open field. In order to mitigate melee damage you
                    will still be running away, but this time do so in a circle so
                    that you never actually end up too far from your healer to be
                    healed (or break his casts with line of sight objects). The
                    diameter of said circle should be about 20 meters.</p>
                <p>There are two exceptions to this rules, those being:
                    <ol>
                        <li>If the enemy team is entirely ranged, play is if you had
                            a tank instead of a healer. You will mitigate more damage
                            in this way than you will healing, although a bad healer
                            will rage at you and probably cause a loss in this case.
                            Which brings us to&hellip;</li>
                        <li>If your healer is shit, play as if you do not have one
                            (that is, if there&apos;s a tank, play it like tank games,
                            and if there isn&apos;t a tank, play it like all-DPS games.)</li>
                    </ol>
                </p>
                <h3>Playing Around DCDs</h3>
                <p>I&apos;ve touched on this briefly before, but it is important, so
                    let&apos;s cover it again. As an arena player of any kind, it&apos;s
                    advantageous to only expose yourself to damage when you can do
                    something productive. That is to say, hide behind a wall or an
                    object when a player pops major defensive cooldowns. There are two
                    ways to play this, depending if you are taking damage or not. If
                    you are taking damage, which you most likely will when you are new,
                    it&apos;s helpful to time your escapes (your
                    <span class="sprite sprite-phase-walk">Phase Walk</span> and
                    <span class="sprite sprite-force-barrier">Force Barrier</span>)
                    with major enemy DCDs, like a merc or PT&apos;s Kolto Overload, or
                    a marauder&apos;s Undying Rage. This way, your target can&apos;t
                    get free damage on you without taking any themselves. It also
                    makes it so that if they spend time chasing you, they essentially
                    kite out their own DCD, which is also advantageous for your team.</p>
                <p>The second situation to consider is when your target pops a major
                    defensive cooldown, and you are not the target (this is called
                    freecasting). In this instance, you should just swap to the
                    second target until the first target&apos;s DCD expires in order
                    to avoid wasting damage. As Lightning, target swapping barely
                    impacts your damage as long as you swap back in time to refresh
                    <span class="sprite sprite-affliction">Affliction</span>
                    on the first target, which you can do with
                    <span class="sprite sprite-chain-lightning">Chain Lightning</span> / <span class="sprite sprite-halted-offensive">Halted Offensive</span>
                    (instant) or
                    <span class="sprite sprite-crushing-darkness">Crushing Darkness</span>
                    (casted).
                </p>
            </section>
            <hr />
            <section id="advanced">
                <h2>Advanced Topics</h2>
                <p>Don&apos;t pay too much mind to these concepts when you&apos;re
                    first starting out, but coming back to them may help you win more
                    fights in the future once you&apos;ve got the basic hang of this
                    spec.</p>
                <h3>Empty GCD Usage</h3>
                <p>A fundamental premise of SWTOR is that someone who makes use of all
                    their GCDs (presses an ability as soon as possible) will always
                    have a significant advantage over someone that does not. This is
                    what we call &quot;wasting globals&quot;. Since in this spec you
                    will frequently be taking cover to avoid burst damage, here is the
                    ability priority during those GCD windows where you aren&apos;t in
                    line-of-sight to attack anyone.</p>
                <ol>
                    <li><span class="sprite sprite-static-barrier">Static Barrier</span></li>
                    <li><span class="sprite sprite-resurgence">Resurgence</span></li>
                    <li><span class="sprite sprite-dark-heal">Dark Heal</span>
                        (Only if it is proc&apos;d or you are below 30% health)
                        &mdash; skip if you have full health.</li>
                    <li><span class="sprite sprite-consuming-darkness">Consuming Darkness</span>
                        (Use sparingly unless you are low on force.)</li>
                </ol>
                <p>Conversely, to the maximum extent permitted by the situation
                    you&apos;re in, try to break line-of-sight with any enemy players
                    targeting you while you use these abilities naturally, in order to
                    avoid taking unreciprocated damage.</p>
                <h3>Optimizing for Gathering Storm</h3>
                <p>As you may have noticed, your <strong>Gathering Storm</strong>
                    implant includes a nifty buff which increases the damage of the
                    next ability after your
                    <span class="sprite sprite-force-speed">Force Speed</span>
                    by 20%. Since
                    <span class="sprite sprite-chain-lightning">Chain Lightning</span> / <span class="sprite sprite-halted-offensive">Halted Offensive</span>
                    operates on a system of procs, rather than having its own cooldown,
                    it is ideal for your damage to delay this ability until
                    immediately after you activate
                    <span class="sprite sprite-force-speed">Force Speed</span>,
                    which regardless of what you are doing you will likely be doing
                    on cooldown.</p>
                <p>It is important to note that there are many instances in which
                    it is not advisable to utilize this optimization, however. For
                    example, when you have
                    <span class="sprite sprite-recklessness">Recklessness</span>
                    active, when you are the other team&apos;s kill target, or when
                    you are chasing a moving target that you cannot stand still to cast
                    <span class="sprite sprite-thundering-blast">Thundering Blast</span>
                    on, this advice should be completely ignored. This is because
                    under
                    <span class="sprite sprite-recklessness">Recklessness</span>,
                    you will want to use your two hardest-hitting abilities
                    immediately, regardless of the status of
                    <span class="sprite sprite-force-speed">Force Speed</span>,
                    and because using this optimization will oftentimes force you to
                    use your <strong>Eyrin's Haste</strong> buff on an instant-cast
                    <span class="sprite sprite-lightning-bolt">Lightning Bolt</span>,
                    rather than an instant-cast
                    <span class="sprite sprite-thundering-blast">Thundering Blast</span>.
                    This is actually a net improvement to your damage, but it comes at
                    a steep cost in terms of mobility, which is your highest priority
                    when kiting or chasing a target.
                <h3 id="teamranked">Team Ranked with Convection</h3>
                <p>Yes I&apos;m aware team ranked has been removed, but the term is
                    still useful to identify competitive tank/heal arenas with good
                    players on both sides. In this style of play, you&apos;re unlikely
                    to be allowed to freecast
                    <span class="sprite sprite-thundering-blast">Thundering Blast</span>
                    and
                    <span class="sprite sprite-crushing-darkness">Crushing Darkness</span>
                    at will, outside of
                    <span class="sprite sprite-polarity-shift">Polarity Shift</span>.
                    Therefore we will need to make some adjustments to our priority
                    in order to ensure we keep cleave damage and survivability going
                    out without delay, preventing ourselves from being shut down and
                    easily killed.</p>
                <p>The first thing to note, which will be obvious to experienced
                    sorc players: save
                    <span class="sprite sprite-polarity-shift">Polarity Shift</span>
                    to be used on whitebar, unless you literally are not being
                    stunned. A stun chain can easily keep you inert during your
                    interrupt immunity and damage boost window, which is a massive
                    penalty to your damage. In more scrappy contexts we will normally
                    use polarity immediately in the opener to hit the target for an 80k
                    <span class="sprite sprite-thundering-blast">Thundering Blast</span>
                    before they have the chance to react. This is far less effective in
                    team ranked because ultimately this mode is about sustained
                    damage and sustained mitigation. Also, your initial 80k will be
                    healed off almost immediately while you sit a pull/double carb
                    for the rest of your polarity shift window, if you get it off at
                    all. Therefore, your opener is more likely going to look like
                    placing
                    <span class="sprite sprite-affliction">Affliction</span>
                    on all 4 targets (or 3, if one of the non-primary targets will
                    continuously purge it, like a leth op), getting pulled into the
                    group, and breaking the carbonize (which should whitebar you) to
                    <span class="sprite sprite-force-speed">Force Speed</span>
                    out of the group and THEN AND ONLY THEN pop
                    <span class="sprite sprite-polarity-shift">Polarity Shift</span>
                    to do a nuclear opener into the unguarded target. If you want to be
                    cheeky, you can use a
                    <span class="sprite sprite-volt-rush">Volt Rush</span>
                    in the air as you&apos;re getting pulled in to get a free
                    <span class="sprite sprite-chain-lightning">Chain Lightning</span>
                    proc that you can spend your <strong>Gathering Storm</strong>
                    buff on as you sprint out of the group.</p>
                <h4>Damage Priority</h4>
                <ol>
                    <li>Proc
                        <span class="sprite sprite-chain-lightning">Chain Lightning</span>
                        with
                        <span class="sprite sprite-thundering-blast">Thundering Blast</span>,
                        <span class="sprite sprite-lightning-bolt">Lightning Bolt</span>, or
                        <span class="sprite sprite-force-storm">Force Storm</span>
                        every 9 seconds</li>
                    <li>Spend natural
                        <span class="sprite sprite-chain-lightning">Chain Lightning</span>
                        proc and re-proc with
                        <span class="sprite sprite-volt-rush">Volt Rush</span></li>
                    <li>Keep
                        <span class="sprite sprite-static-barrier">Static Barrier</span>
                        on cooldown</li>
                    <li>Maintain <strong>Fulgrous Fortification</strong> (DR) stacks with
                        <span class="sprite sprite-lightning-bolt">Lightning Bolt</span></li>
                    <li><span class="sprite sprite-thundering-blast">Thundering Blast</span>
                        if you can successfully cast it (use judgement)</li>
                    <li>Re-<span class="sprite sprite-affliction">Affliction</span>
                        targets where it&apos;s dropped</li>
                    <li><span class="sprite sprite-lightning-flash">Lightning Flash</span></li>
                    <li><span class="sprite sprite-volt-rush">Volt Rush</span>-procd
                        <span class="sprite sprite-chain-lightning">Chain Lightning</span></li>
                    <li><span class="sprite sprite-lightning-bolt">Lightning Bolt</span></li>
                </ol>
                <p>You can float your second
                    <span class="sprite sprite-chain-lightning">Chain Lightning</span>
                    proc from
                    <span class="sprite sprite-volt-rush">Volt Rush</span>
                    fairly freely in order to prioritize other abilities, but always
                    spend it before re-proccing. You may also notice that
                    <span class="sprite sprite-crushing-darkness">Crushing Darkness</span>
                    does not make an appearance here. That&apos;s because the damage
                    it does is simply not worth the incoming damage you take to stand
                    still and cast it, considering that if the dot is purged, the
                    initial damage is less than that of
                    <span class="sprite sprite-lightning-bolt">Lightning Bolt</span>,
                    and that if it gets interrupted it does zero damage. You may want
                    to occasionally send one out, such as under
                    <span class="sprite sprite-polarity-shift">Polarity Shift</span>,
                    in order to apply the vulnerable debuff to targets, but this is
                    of very little importance in the grand scheme.
                </p>
                <h3 id="triple-chain-lightning">The Triple Chain Lightning Rotation</h3>
                <p>If you, for some reason, do not find yourself to be one of the
                    targets in a team ranked situation, or you happen to be playing
                    warzones in AOE spec, your job is to do an unfathomable amount
                    of damage to the enemy team, which will result in their healer
                    panicking and everybody dying. Fortunately, there is an easy
                    static rotation which can be followed for maximal damage in this
                    circumstance. Unlike the other rotations in this guide, this is
                    not a priority system. Do the steps in order and then repeat.</p>
                <ol class="rotation">
                    <li value="0">Keep <span class="sprite sprite-affliction">Affliction</span>
                        on all targets without a purge.</li>
                    <li><span class="sprite sprite-chain-lightning">Chain Lightning</span>
                        (not proc'd&mdash;hardcast this)</li>
                    <li><span class="sprite sprite-thundering-blast">Thundering Blast</span></li>
                    <li><span class="sprite sprite-chain-lightning">Chain Lightning</span></li>
                    <li><span class="sprite sprite-volt-rush">Volt Rush</span></li>
                    <li><span class="sprite sprite-chain-lightning">Chain Lightning</span></li>
                    <li>Three abilities of your choosing. This is a meaningless
                        portion of your damage. Even offhealing would not be a bad
                        bet here. You can also build DR with
                        <span class="sprite sprite-lightning-bolt">Lightning Bolt</span>s,
                        or eek out a little bit more damage with some combination of
                        <span class="sprite sprite-volt-rush">Volt Rush</span> and
                        <span class="sprite sprite-force-storm">Force Storm</span>
                        (don&apos;t do the Force Storm second or you&apos;ll
                        accidentally proc
                        <span class="sprite sprite-chain-lightning">Chain Lightning</span>
                        early, though.)</li>
                </ol>
            </section>
<?php
require('include/guide-footer.php');
?>
        </div>
    </body>
</html>
