<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="Natalyh" />
        <meta name="description" content="A new player&apos;s guide for how to play the Corruption Sorcerer specialization in PvP arenas and warzones." />
        <meta property="og:description" content="A new player&apos;s guide for how to play the Corruption Sorcerer specialization in PvP arenas and warzones." />
        <meta property="og:title" content="SWTOR 7.6 Corruption PvP Guide" />
        <meta property="og:type" content="article" />
        <meta property="article:author" content="https://natalyh.com/">
        <meta property="article:published_time" content="2022-12-27T16:49:00.000-08:00">
        <meta property="article:modified_time" content="2022-12-27T16:49:00.000-08:00">
        <meta property="article:section" content="Gaming">
        <meta property="og:image" content="https://natalyh.com/static/banner-corruption.webp" />
        <meta property="og:image:width" content="460" />
        <meta property="og:image:width" content="460" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:site_name" content="Natalyh&apos;s SWTOR Guides" />
        <meta property="og:url" content="https://natalyh.com/corruption" />
        <link rel="canonical" href="https://natalyh.com/corruption" />
        <title>SWTOR 7.6 Corruption PvP Guide / Natalyh&apos;s SWTOR Guides</title>
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
            <header id="banner" class="banner-corruption">
                <h1>SWTOR 7.6 Corruption PvP Guide</h1>
            </header>
            <section id="playstyle">
                <h2>A Note About Healing</h2>
                <p>It&apos;s very important to note before we get started here:
                    corruption is a healing spec. Healing is an entirely different
                    beast than playing a DPS. You are a support role, you cannot
                    afford to play selfishly, to number farm, et. cetera. Your job is
                    not to hunt down the enemy and kill them. Your job is also not,
                    as many bad healers believe, to respond to damage after it hits.
                    This is an extremely proactive role in 7.0, because burst healing
                    has become literal shit over the past two expansions. Your role is to
                    identify where the enemy team&apos;s damage is going, and pattern match
                    your heals accordingly. It&apos;s honestly very akin to farming
                    when done properly, and will net you big numbers and look cool.
                    If you&apos;re doing it right, your team&apos;s health bars should
                    be more or less uniform (or at least those taking damage), and the
                    process should feel like wrestling against the DPS. However, if
                    one teammate randomly drops much lower than the others (due to the
                    tank missing a guard swap or the dps missing a dcd), that is the
                    fault of the person who missed their cue, and you should get upset
                    with them, because having to compensate that difference will likely
                    jeopardize your team&apos;s ability to survive as a unit. That is
                    not the same thing as you letting someone get low because you
                    failed to track the incoming damage, however. In that case
                    it is your fault and you should apologize.</p>
                <p>In the event that the game doesn&apos;t give you a tank, most of
                    the above doesn&apos;t apply, and you&apos;ll have to spec
                    according to the fact that, unless the enemy team is braindead, they
                    will drop somebody straight through your healing. In that event,
                    you&apos;re just prolonging the inevitable in the hopes that your
                    team drops their target first. These types of games are honestly
                    quite boring and you have fairly low impact in them, so we&apos;ll
                    prefer to talk about tank games in this guide. I will still show
                    how to spec and use your abilities for heal/dps games, though.</p>
            </section>
            <hr />
            <section id="builds">
                <h2>Corruption Builds</h2>
                <p>The two builds are fairly similar and essentially hinge on whether
                    you need to heal cleave (AOE/distributed damage) or not. If you
                    have a tank, you will always have to heal cleave because their job
                    is to split burst damage into cleave damage, allowing you to heal
                    it more effectively. In a heal/dps game, you more likely than not
                    will have no need to heal cleave, but the presence of certain specs on
                    the enemy team will be your cue to swap into cleave build. These
                    are primarily lethality operative, vengeance juggernaut, or
                    pyrotech powertech. These specs do a ton of rotational AOE damage
                    at the expense of their single-target effectiveness, and you&apos;ll
                    want to match the pattern of their damage by doing some AOE
                    healing.
                </p>
                <div id="build-gear">
                    <h3>Stim</h3>
                    <p>Use Advanced Kyrprax Versatile Stim. Do not pass go, do not
                        collect two hundred dollars.</p>
                    <h3>Gear and Set Bonus</h3>
                    <p>For legendaries, you want <strong>Revitalize Package</strong>
                        and <strong>Unmatched Haste Package</strong>, in that order.
                        Revitalize is far more useful to you on this spec than the
                        Polarity Shift uptime that that Unmatched Haste gives.</p>
                    <p>For regular gear, you want the best item level gear you can get
                        at any point in time. I recommend using the <strong>1.4 GCD</strong>
                        alacrity build, which will require 4 alacrity pieces. Thus,
                        in addition to your legendaries, you will need to get
                        <strong>4 alacrity</strong> enhancements and <strong>4
                        critical</strong> enhancements. There are a variety of healing
                        builds out there which play with using more alacrity to
                        shorten cast times, but as healers we are interrupted
                        hyper-aggressively and want to cast as little as possible,
                        meaning we will get far more value from running the GCD
                        breakpoint for our instant abilities, and investing in crit
                        to make said abilities heal for more.

                        The moddable gear vendor <strong>Hyde and Zeek</strong> is far
                        and away the easiest way to gear, it isn&apos;t worth
                        bothering with any other method.</p>
                    <div class="multiplex">
                        <div class="mux-frame">
                            <a href="static/stats-standard.webp" target="_blank">
                                <img class="size-std" src="static/stats-standard.webp" alt="Corruption Stats (332)" />
                            </a>
                            <p class="caption">Corruption Stats (332)</p>
                        </div>
                        <div class="mux-frame">
                            <a href="static/implants-sorcheal.webp" target="_blank">
                                <img class="size-std" src="static/implants-sorcheal.webp" alt="Sorc Healer Implants" />
                            </a>
                            <p class="caption">Sorc Healer Implants</p>
                        </div>
                    </div>
                    <h3>Tactical Item</h3>
                    <p>Use the <strong>One for All</strong> tactical, no exceptions.
                        Do not bother with alternatives like <strong>Storm&apos;s Succor</strong>.
                        They will lower your HPS and cost you your best defensive
                        cooldown, all for the sake of doing a pitiful amount of
                        damage that the enemy healer will easily handle, while his
                        team is punishing your loadout mistake by killing you easily.
                        I have no interest in hearing counter-arguments to this, every
                        single instance of a team ranked healer not taking phase walk
                        against human players results in them getting dog walked.</p>
                    <h3>Augments</h3>
                    <p>If you use the build I&apos;ve prescribed, all of your augments
                        should be crit augments. If you&apos;re freestyling,
                        you&apos;ll want to use augments to reach the proper stat
                        thresholds, that being &geq;2050 alacrity (for 1.4 second GCD);
                        the rest of your stats go into crit. Do not use accuracy on a
                        healer, ever. It is the easiest thing you can do to brand yourself
                        as a clueless noob in this game. Heals don&apos;t miss.</p>
                </div>
                <div id="build-cleave">
                    <h2>Standard Build</h2>
                    <p>This is your default build for healing in tank games, AOE
                        situations, or 8v8 warzones. It has slighly lower burst
                        healing in exchange for the ability to spread your
                        <span class="sprite sprite-resurgence">Resurgence</span>
                        heal-over-time effect to up to 3 additional targets. Your
                        implant (Revitalize) will cause your
                        <span class="sprite sprite-revivification">Revivification</span>
                        AOE heal to proc additional healing on spread targets,
                        creating a field of intense periodic healing that is your
                        bread and butter for keeping up with AOE and periodic damage.</p>
                    <h3 class="centered">Discipline Tree</h3>
                    <div class="multiplex">
                        <div class="mux-frame">
                            <a href="static/tree-corruption1.webp" target="_blank">
                                <img class="tree size-std" src="static/tree-corruption1.webp" alt="Discipline Tree (Corruption)" />
                                <p class="caption">Discipline Tree (Corruption)</p> 
                            </a>
                        </div>
                        <div class="mux-frame">
                            <a href="static/tree-seer1.webp" target="_blank">
                                <img class="tree size-std" src="static/tree-seer1.webp" alt="Discipline Tree (Seer)" />
                                <p class="caption">Discipline Tree (Seer)</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="build-cleave">
                    <h2>Single Target Build</h2>
                    <p>If you have no use for spreading your
                        <span class="sprite sprite-resurgence">Resurgence</span>,
                        for instance if only one player is taking damage, then you may as
                        well swap that talent out and receive a 15% buff to your burst
                        healing from
                        <span class="sprite sprite-dark-heal">Dark Heal</span>
                        and
                        <span class="sprite sprite-dark-infusion">Dark Infusion</span>.
                    </p>
                    <h3 class="centered">Discipline Tree</h3>
                    <div class="multiplex">
                        <div class="mux-frame">
                            <a href="static/tree-corruption2.webp" target="_blank">
                                <img class="tree size-std" src="static/tree-corruption2.webp" alt="Discipline Tree (Corruption)" />
                                <p class="caption">Discipline Tree (Corruption)</p> 
                            </a>
                        </div>
                        <div class="mux-frame">
                            <a href="static/tree-seer2.webp" target="_blank">
                                <img class="tree size-std" src="static/tree-seer2.webp" alt="Discipline Tree (Seer)" />
                                <p class="caption">Discipline Tree (Seer)</p>
                            </a>
                        </div>
                    </div>
                </div>
                <p>Do not ever take <span class="sprite sprite-rally">Rally</span>. It is a trap set
                    by the developers. In AOE, delaying your better AOE healing abilities to cast
                    this is either an HPS loss, or a loss of force (which is a long-term HPS loss).
                    In single-target scenarios, or to even out one egregiously low health bar resulting
                    from a missed guard swap,
                    <span class="sprite sprite-dark-infusion">Sustained Corruption</span>
                    will do the same thing better.</p>
            </section>
            <hr />
            <section id="rotation">
                <h2>Rotation</h2>
                <h3 id="abilities">Abilities</h3>
                <p>Corruption has six rotational rotational heals which you will use
                    frequently, and one very situational heal in the way of
                    <span class="sprite sprite-dark-infusion">Dark Infusion</span>.</p>
                <p>For healing cleave, you will use abilities in priority order, meaning
                    always activate the ability with the highest priority that is off
                    cooldown at any given time, and place it on the target that is
                    currently taking the most damage. Rare exceptions exist where you
                    will have to heal someone who is not actively taking damage
                    because their health has gotten so low that they will die from
                    AOE damage, dots, or their own defensive cooldowns (for example
                    Juggernauts&apos; <strong>Endure Pain</strong>). This is called
                    being behind the damage, and it is a very bad state to find yourself
                    in when healing against pressure. Generally the only way to recover
                    from this is to force one of your teammates to pop a strong defensive
                    cooldown, which can buy you time to catch up. You will likely also
                    need to resort to single-target ability combinations in this case.</p>
                <p>For healing single target, a priority system will not work. Several
                    of your abilities require your <strong>Force Bending</strong> passive
                    to activate instantly, and the difference between them healing instantly
                    or eventually can cost a teammate&apos;s life. For this reason, you will
                    use a modified priority system consisting of ability combinations, where
                    you should only activate a given combination if all its abilities are
                    ready to be used in sequence, and otherwise resort to using single-ability
                    fillers.</p>
                <p>For setting up your bars, you want to put
                    <span class="sprite sprite-resurgence">Resurgence</span>,
                    <span class="sprite sprite-roaming-mend">Roaming Mend</span>,
                    <span class="sprite sprite-innervate">Innervate</span>,
                    <span class="sprite sprite-dark-heal">Dark Heal</span>,
                    <span class="sprite sprite-revivification">Revivification</span>,
                    <span class="sprite sprite-static-barrier">Static Barrier</span>,
                    and
                    <span class="sprite sprite-consuming-darkness">Consuming Darkness</span>
                    in easy-to-reach places. Notice they are 71% green. Most healers in this game
                    place an over-emphasis on controlling the enemy team and fall behind on their
                    first and most important responsibility, which is keeping up with incoming
                    damage. I will not mince words, this makes them bad healers and loses them
                    games. Control is entirely secondary to healing, and off-DPS in PvP is throwing
                    unless you can literally kill the target with one ability.</p>
                <p>You will also want some access to
                    <span class="sprite sprite-dark-infusion">Dark Infusion</span>,
                    <span class="sprite sprite-electrocute">Electrocute</span>,
                    <span class="sprite sprite-overload">Overload</span>,
                    <span class="sprite sprite-shock">Shock</span>,
                    <span class="sprite sprite-force-lightning">Force Lightning</span>, and
                    <span class="sprite sprite-crushing-darkness">Crushing Darkness</span>,
                    but feel free to put these on keys with shift-modifiers because they will not
                    be used as often.</p>
                <h3 id="ocds">Offensive Cooldowns</h3>
                <p>You have two offensive cooldowns on sorc, these are
                    <span class="sprite sprite-recklessness">Recklessness</span>
                    and
                    <span class="sprite sprite-polarity-shift">Polarity Shift</span>.</p>
                <p><span class="sprite sprite-recklessness">Recklessness</span>
                    will make your next two abilities crit, guaranteed,
                    but it won&apos;t increase their critical bonus healing like a
                    normal autocrit would. Many healers make the mistake of holding
                    this until their team is &quot;low&quot;, failing to realize that
                    being at 75% already puts them behind, and as a result lose
                    <span class="sprite sprite-recklessness">Recklessness</span> activations.
                    As a rule of thumb, you want to use
                    <span class="sprite sprite-recklessness">Recklessness</span>
                    with
                    <span class="sprite sprite-innervate">Innervate</span>
                    and either
                    <span class="sprite sprite-unnatural-preservation">Unnatural Preservation</span>
                    or a proc&apos;d (glowing)
                    <span class="sprite sprite-dark-heal">Dark Heal</span>,
                    depending on whether you are the one taking the most damage, as soon
                    as all three of these are off cooldown. Worth noting that
                    <span class="sprite sprite-revivification">Revivification</span>
                    will not consume Recklessness charges, so you can do something like
                    <span class="sprite sprite-recklessness">Recklessness</span>,
                    <span class="sprite sprite-innervate">Innervate</span>,
                    <span class="sprite sprite-revivification">Revivification</span>,
                    <span class="sprite sprite-dark-heal">Dark Heal</span>
                    if you don&apos;t already have a proc ready.
                </p>
                <p><span class="sprite sprite-polarity-shift">Polarity Shift</span>
                    does a couple of things. First, it makes you immune to being
                    interrupted or having your casts slowed in any way. Second, it
                    increases your alacrity (as in, your cast and GCD speed) by 20%.
                    This is a significant increase to your healing output so you want
                    to make sure you don&apos;t waste its uptime sitting in a stun.
                    The best way to do this is to pop
                    <span class="sprite sprite-polarity-shift">Polarity Shift</span>
                    the first time you come out of a stun chain with whitebar and
                    you have it off cooldown. This has the added benefit of helping
                    you recover from the damage your team took while you were stunned.
                    If I am being stunned out but not taking damage, I will generally
                    hold my
                    <span class="sprite sprite-unbreakable-will">Unbreakable Will</span>
                    if I have
                    <span class="sprite sprite-polarity-shift">Polarity Shift</span>
                    available to recover once I am whitebarred, excluding of course if any
                    of my teammates will die during or shortly after the stun.</p>
                <h3>Cleave Rotation: Priority System</h3>
                <p>Unless someone is in immediate jeopardy of dying (see burst combos),
                    use the ability highest on this list that is off cooldown at any given time.
                    Usually you just want to target the same player as the enemy DPS, but
                    occasionally there is value in spreading healing abilities around to ensure
                    equitable distribution, especially in cleave or split damage scenarios. This
                    is a judgement call you have to make based on your team&apos;s health level
                    and the incoming damage profile.</p>
                <ol class="rotation-list">
                    <li><span class="sprite sprite-roaming-mend">Roaming Mend</span></li>
                    <li><span class="sprite sprite-static-barrier">Static Barrier</span>
                        on yourself &mdash; This will stun enemies and give you
                        breathing room to cast.</li>
                    <li><span class="sprite sprite-revivification">Revivification</span>
                        &mdash; Place on top of as many allies as possible.</li>
                    <li><span class="sprite sprite-resurgence">Resurgence</span></li>
                    <li><span class="sprite sprite-consuming-darkness">Consuming Darkness</span>
                        &mdash; Weave about one of these in per
                        <span class="sprite sprite-innervate">Innervate</span>
                        to maintain your force.</li>
                    <li><span class="sprite sprite-innervate">Innervate</span></li>
                    <li><span class="sprite sprite-dark-heal">Dark Heal</span>
                        with proc (when it glows)</li>
                    <li><span class="sprite sprite-static-barrier">Static Barrier</span>
                        on others</li>
                </ol>
                <p>Using <span class="sprite sprite-resurgence">Resurgence</span>
                    immediately before
                    <span class="sprite sprite-roaming-mend">Roaming Mend</span>
                    should be avoided if possible, as it will waste
                    <strong>Force Bending</strong>.</p>
                <h3>Mobile Cleave Rotation</h3>
                <p>This rotation will keep your revivifications and spreads going out regardless
                    of how much you are interrupted, stunned, pushed around, or ragdolled, and can
                    be utilized while moving. Fall back to this when you are being heavily tunneled
                    or permanently sat on by one player in tank games so you can focus on mitigating
                    damage by way of your positioning. Follow the rotation in order and repeat.</p>
                <ol class="rotation-list">
                    <li><span class="sprite sprite-resurgence">Resurgence</span></li>
                    <li><span class="sprite sprite-revivification">Revivification</span></li>
                    <li>Filler</li>
                    <li>Filler</li>
                    <li><span class="sprite sprite-resurgence">Resurgence</span></li>
                    <li><span class="sprite sprite-innervate">Innervate</span></li>
                    <li>Filler</li>
                </ol>
                <p>The priority for fillers is:</p>
                <ol class="rotation-list">
                    <li><span class="sprite sprite-roaming-mend">Roaming Mend</span></li>
                    <li><span class="sprite sprite-static-barrier">Static Barrier</span>
                        on yourself</li>
                    <li><span class="sprite sprite-consuming-darkness">Consuming Darkness</span>
                        at least once per rotation, twice if low on force</li>
                    <li><span class="sprite sprite-dark-heal">Dark Heal</span>
                        with proc</li>
                    <li><span class="sprite sprite-static-barrier">Static Barrier</span>
                        on others</li>
                </ol>
                <h3 id="target-selection">Burst Combos</h3>
                <p>You have two primary burst combos that can shoot somebody&apos;s
                    health up. When neither is available, fill with the highest ability on the
                    filler list your have available. We can treat this like a priority system:</p>
                <ol class="rotation-list">
                    <li>
                        <span class="sprite sprite-resurgence">Resurgence</span> +
                        <span class="sprite sprite-roaming-mend">Roaming Mend</span>
                    </li>
                    <li>
                        <span class="sprite sprite-resurgence">Resurgence</span> +
                        <span class="sprite sprite-revivification">Revivification</span> or
                        <span class="sprite sprite-dark-infusion">Dark Infusion</span>
                    </li>
                    <li><span class="sprite sprite-consuming-darkness">Consuming Darkness</span>
                        when pressure is light&mdash;try to use one per
                        <span class="sprite sprite-innervate">Innervate</span>.</li>
                    <li><span class="sprite sprite-innervate">Innervate</span></li>
                    <li><span class="sprite sprite-dark-heal">Dark Heal</span> with proc</li>
                    <li><span class="sprite sprite-static-barrier">Static Barrier</span></li>
                </ol>
                <p>Generally you&apos;ll choose
                    <span class="sprite sprite-dark-infusion">Dark Infusion</span>
                    over
                    <span class="sprite sprite-revivification">Revivification</span>
                    if you can stand still and freecast without being interrupted, and
                    <span class="sprite sprite-revivification">Revivification</span>
                    if you need to move or avoid being interrupted. If you are the enemy
                    team&apos;s tunnel target,
                    <span class="sprite sprite-revivification">Revivification</span>                    
                    is always the right choice.</p>
                <h3>Force Management</h3>
                <p>Corruption is the only spec in the game that has active resource
                    management. This means that unlike DPS specs or other healers you
                    may be used to, your energy will not regenerate on its own, and
                    you will need to periodically waste GCDs on
                    <span class="sprite sprite-consuming-darkness">Consuming Darkness</span>
                    to ensure you don&apos;t run out. This is actually quite strong,
                    because it allows you to dump your force in times of urgency, and
                    regenerate it in times of safety. It does, however, have the
                    major downside of being extremely unintuitive to learn.</p>
                <p>By default, and on DPS specs,
                    <span class="sprite sprite-consuming-darkness">Consuming Darkness</span>
                    gives you a debuff which decreases your natural force regeneration,
                    and should be avoided unless absolutely necessary. However, as corruption,
                    whenever your
                    <span class="sprite sprite-innervate">Innervate</span>
                    critically heals, you will receive a buff which allows you to use
                    <span class="sprite sprite-consuming-darkness">Consuming Darkness</span>
                    without penalty, instead granting a buff called
                    <strong>Reverse Corruptions</strong> which will actually increase
                    your natural force regeneration rate. No matter if you are splurging or
                    playing conservative, you want to keep this buff up at all times, which
                    means proc&apos;ing and using
                    <span class="sprite sprite-consuming-darkness">Consuming Darkness</span>
                    at least once every 10 seconds. If for some reason you are screwed and need
                    force immediately, you can also consume this buff by using
                    <span class="sprite sprite-consuming-darkness">Consuming Darkness</span>
                    without the proc, which will prevent you from receiving the
                    <strong>Weary</strong> debuff that nukes your force. You never
                    want to have <strong>Weary</strong> stacks on you, so make sure to keep
                    <span class="sprite sprite-innervate">Innervate</span> and
                    <span class="sprite sprite-consuming-darkness">Consuming Darkness</span>
                    coming out regularly, at about a 2:3 ratio. There is a rhythm to this which
                    you will get the hang of as you gain experience.</p>
                <p>It&apos;s also worthwhile to note that you do no healing while you
                    are regenerating force with
                    <span class="sprite sprite-consuming-darkness">Consuming Darkness</span>,
                    so it&apos;s advantageous not to take damage while you use it. If
                    you have the opportunity to step behind a pole, wall, or other
                    object before you need to use a series of these, you should make
                    it a priority to do so.</p>
                <p>Force management is pretty free-form, but always prioritize the
                    survival of your teammates over sustaining your force pool. Your
                    left-over force will do you no good at the end of a match or going
                    into the next round.</p>
                <h3 id="chasing">Chasing Targets</h3>
                <p>PvP healing is very different to PvE. There are many classes which
                    cannot afford to sit still and let you cast a rotation on them,
                    because the damage they take will far outpace your heals, and
                    many more which will benefit from kiting although they could
                    probably afford to sit still and tank the damage. Your
                    responsibility as the healer is not actually to produce the
                    largest HPS number possible, but rather, to create the smallest
                    possible <em>[incoming DPS - incoming HPS]</em> value, and
                    therefore in order to play competently you have to kite with
                    your target.</p>
                <p>Recall that by substituting
                    <span class="sprite sprite-dark-infusion">Dark Infusion</span>
                    for
                    <span class="sprite sprite-revivification">Revivification</span>
                    in your second healing combination, every single ability you use
                    can be activated on the move. Very few specs have this luxury, and
                    fewer still have the ability to keep up with your mobility while
                    eating the amount of control you can put out. This means that you
                    are actually at a massive advantage when following a kiting target
                    around objects, changing levels, running behind walls, et cetera, as
                    opposed to standing still. You will likely be within melee range of
                    your healing target to get maximum value out of this strategy, and
                    there&apos;s nothing wrong with that.</p>
                <p>If your target does happen to be faster than you, you can also wait for
                    enemies to reach them and then use
                    <span class="sprite sprite-extrication">Extrication</span>
                    to pull them back to your location, creating separation in the opposite
                    direction and likely confusing many of the enemies along the way. This
                    is a strategy that becomes particularly useful when paired with a level
                    change from low to high. If you can pull your target from downstairs to
                    upstairs on a two-level map it&apos;s very unlikely all the enemies can
                    follow them, particularly if you use
                    <span class="sprite sprite-overload">Overload</span>
                    to knock anyone that spends a gap closer on it.</p>
                <p>In summary, if you find yourself thinking &quot;he&apos;s
                    line-of-sighting me, I can&apos;t heal him!&quot;, you need to
                    reframe the problem as &quot;I can&apos;t keep up with him.&quot;,
                    and then set about solving the problem from there. Recall that
                    <span class="sprite sprite-force-speed">Force Speed</span>
                    will purge every slow or root in the game, and using
                    <span class="sprite sprite-expunge">Expunge</span>
                    on yourself will cleanse all but a few. A particularly tricky
                    situation may require you to take <strong>Surging Speed</strong>
                    for access to more speed boosts and movement buffs, but nothing
                    in the game should be able to outrun you once you are spec&apos;d
                    into it.</p>
            </section>
            <hr />
            <section id="defense">
                <h2>Defense</h2>
                <p>Your defensive strategy on sorc healer can be summarized as
                    <em>Cannot see target</em>. DPS have a limitation where in order
                    to do their job, they must be within line-of-sight (LoS) of their
                    target. You, when healing yourself, do not share this limitation,
                    and abusing this well will enable you to slow down incoming damage
                    to a level that you can heal through.Your bread and butter will be
                    to do Nascar laps around poles, walls, crates, GTN terminals, and
                    any other line-of-sight objects available. If opponents are keeping
                    up well, you have several options:
                </p>
                <ol>
                    <li>Reverse direction to throw them off.</li>
                    <li>Use <span class="sprite sprite-overload">Overload</span> to root
                        them on one side of the object while you go cast on the other.</li>
                    <li><span class="sprite sprite-static-barrier">Static Barrier</span>
                        yourself to stun them and buy some breathing room. You will actually
                        want to start chasing enemies once you do this to make sure the stun
                        hits them.</li>
                    <li><span class="sprite sprite-force-speed">Force Speed</span> to a different
                        LoS object if your current one has become too crowded.</li>
                </ol>
                <p>(1) and (2) will generally be sufficient to shake even a skilled attacker,
                    but you may need to use <span class="sprite sprite-expunge">Expunge</span>
                    to cleanse a root or slow on yourself every once in a while to keep them from
                    catching up. Once multiple attackers join in, it's time to start pursuing
                    alternatives (3) and (4). I would generally advise saving
                    <span class="sprite sprite-phase-walk">Phase Walk</span>,
                    <span class="sprite sprite-unbreakable-will">Unbreakable Will</span>, and
                    <span class="sprite sprite-force-barrier">Force Barrier</span> for when you
                    are stunned and can&apos;t kite anymore. This means, when you start taking even
                    a little bit of damage and aren&apos;t stunned, your first stop should be
                    the nearest LoS object.</p>
                <h3 id="unnatural-pres"><span class="sprite sprite-unnatural-preservation">Unnatural Preservation</span></h3>
                <p>People are generally not as negligent about using
                    <span class="sprite sprite-unnatural-preservation">Unnatural Preservation</span>
                    on healer as they are on DPS, but still. It&apos;s free healing, use it off
                    cooldown.
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
                <h3 id="kiting">Kiting Tricks</h3>
                <p>As a healer, the default hard tunnel scenario is remarkably easy to deal
                    with: Nascar laps around an object, heal yourself, use major DCDs when stunned.
                    Therefore, this section will deal with some of the more effective strategies
                    players will try and employ to counter this, and how to counter them back.</p>
                <h4>Sitting and Swaps</h4>
                <p>Much more annoying to you than direct focus will be having 1-2 players
                    on you, stunning/interrupting while the rest of your team is still
                    dying and needs your help. The way to deal with this is as follows:</p>
                <ol>
                    <li>Use the mobile cleave rotation.</li>
                    <li>Bait enemies to the other side of an object from where your team is.</li>
                    <li>Heal yourself with
                        <span class="sprite sprite-roaming-mend">Roaming Mend</span>,
                        proc&apos;d <span class="sprite sprite-dark-heal">Dark Heal</span>,
                        <span class="sprite sprite-resurgence">Resurgence</span>, or
                        the latter few ticks of
                        <span class="sprite sprite-innervate">Innervate</span>.</li>
                    <li>(Optional) Strand enemies using
                        <span class="sprite sprite-overload">Overload</span>,
                        <span class="sprite sprite-static-barrier">Static Barrier</span>,
                        <span class="sprite sprite-electrocute">Electrocute</span>,
                        or just good old fashion jukes.</li>
                    <li>Return to the same side as your team and AOE heal them with
                        <span class="sprite sprite-revivification">Revivification</span>,
                        <span class="sprite sprite-revivification">Resurgence</span>,
                        proc&apos;d <span class="sprite sprite-dark-heal">Dark Heal</span>,
                        <span class="sprite sprite-static-barrier">Static Barrier</span>, or
                        the first tick of a self-targeted
                        <span class="sprite sprite-innervate">Innervate</span> (this will spread your
                        <span class="sprite sprite-revivification">Resurgence</span> to the team).
                        This is also the window where you can manage force or, if you&apos;ve
                        successfully marooned your attackers, attempt a hardcast.</li>
                </ol>
                <p>If you&apos;re a swap target, you should employ this strategy as well just to
                    be unavailable to be swapped on as much as physically possible. You should only
                    be visible to your attackers when you&apos;re healing a teammate that can&apos;t
                    be reached from any other angle.</p>
                <h3>Phase Walk Usage</h3>
                <p>Healing is much more forgiving than DPS specs regarding
                    <span class="sprite sprite-phase-walk">Phase Walk</span>
                    placement, but it is still your bread and butter for escaping stunlocks, and
                    because of this, like DPS, it&apos; important to have it set before you engage in
                    combat. We cannot afford to sit in spawn or engage, because we would be denying
                    ourselves our best defensive cooldown. As a healer, you want your phase close to
                    where your team is fighting, so you can return quickly if DPS swap to your
                    teammates, but still blocked off from where enemies are fighting by a
                    line-of-sight object so you can sit out a stun and maybe cast a heal or two on
                    yourself before re-engaging. Nearly any object will do, I leave this to your
                    discretion.</p>
                <h3>Using DR</h3>
                <p>As corruption, you get
                    <span class="sprite sprite-cloud-mind">Cloud Mind</span> essentially for free in
                    your ability tree, which will increase your damage reduction by 25% for 6 seconds.
                    Ideally you will want to use this or your <strong>Warzone Adrenal</strong> whenever
                    you are caught out in the open, which should be rare, and try not to stack the two
                    as either one is generally be sufficient to render incoming damage healable.</p>
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
                <p>As a healer, a net alone is not generally enough to be threatening, but
                    it does open up the possibility of ending up in a much more dangerous
                    situation. If you are stunned on top of net, the only things you can do
                    are break with
                    <span class="sprite sprite-unbreakable-will">Unbreakable Will</span>
                    and pray. Likewise, if you allow yourself to hit low health and then get
                    netted, the slow applied will reduce your mobility to a point where kiting
                    becomes difficult and you can easily be bursted to death by a well-positioned
                    opponent. For this reason, when you are taking damage and mercs are present,
                    it&apos;s best to simply save breaker and avoid ending up in one of these
                    nightmare scenarios. Your other two major DCDs are generally enough to dissuade
                    mercs, who have very poor mobility and control themselves, from tunneling you.</p>
                <p>If you are netted without either low health or a stun on top of it, I would not
                    recommend breaking the net. This is particularly important when multiple nets are
                    present on the enemy team&mdash;try not to break until you are both stunned and
                    netted on top of it, and if that never happens and you survive all the nets then
                    you are then free to use your breaker as you wish. An unstunned net is a
                    particularly good opportunity to use
                    <span class="sprite sprite-cloud-mind">Cloud Mind</span>
                    or <strong>Warzone Adrenal</strong>, as well as stunning or knocking back any
                    enemies who are easy to reach. Having done all these things and starting from a
                    strong health percentage, you can very likely heal through 9 seconds worth of
                    damage, though it may cost you your <strong>Warzone Medpac</strong> as well.</p>
                <h3>Demo</h3>
                <p>Here is a video demonstrating how to heal under heavy pressure.</p>
                <div class="multiplex">
                    <iframe class="video mux-frame" src="https://www.youtube.com/embed/TgYhfgHS22M" allowfullscreen></iframe>
                </div>
            </section>
            <hr />
            <section id="advanced">
                <h2>Advanced Techniques for Tank Games</h2>
                <p>Don&apos;t pay too much mind to these concepts when you&apos;re
                    first starting out, but coming back to them may help you win more
                    fights in the future once you&apos;ve got the basic hang of this
                    spec.</p>
                <h3>Controlling Enemy Healers</h3>
                <p>As a healer, you are effectively engaged in a survival race against the enemy
                    healer, however, running is not the only way to pull ahead in this race. You
                    also have the opportunity to shoot the enemy healer in the foot by interrupting
                    their casts with <span class="sprite sprite-jolt">Jolt</span>. The easiest way
                    to do this is with <em>Focus Target</em>, an in-game ability which will enable
                    you to see all the enemy healer&apos;s casts and interrupt them without even
                    having to change target.</p>
                <p>Focus target can be enabled via
                    <em>Settings &gt; Controls &gt; Enable Focus Target</em>.
                    Once enabled, you can set keybinds for <em>Set Focus Target</em> (defaults to
                    <em>Alt+F</em>) and <em>Focus Target Modifier</em> (defaults to <em>F</em>).
                    You&apos;ll want to target the enemy healer and use <em>Set Focus Target</em>,
                    then when you see their casts appear on the screen, hold down your
                    <em>Focus Target Modifier</em> key and use
                    <span class="sprite sprite-jolt">Jolt</span>.</p>
                <p>You can also interrupt the enemy healer&apos;s casts by stunning them with
                    <span class="sprite sprite-electrocute">Electrocute</span>, but first ensure that
                    they are not whitebarred (a white bar will appear under their character name and
                    a white ring will show up around their character portrait). Against sorc healers,
                    the ideal time to do this is when they pop
                    <span class="sprite sprite-polarity-shift">Polarity Shift</span>,
                    which you can tell because you&apos;ll see the casts that appear on your
                    screen get faster. Against merc healers, you want to stun during their interrupt
                    immunity windows, which you can tell are happening when you press your focus
                    target modifier and <span class="sprite sprite-jolt">Jolt</span> is grayed out.
                    Against operative healers you can stun any time, but make sure your team has a
                    follow-up stun ready. Operative healers are virtually unaffected by short stun
                    windows, but long ones threaten to let their kolto probes drop which is a major
                    HPS loss.</p>
                <p>Some healers get carried away and start interrupting using
                    <span class="sprite sprite-overload">Overload</span>.
                    I do not recommend this approach for a number of reasons, but suffice to say
                    that it is simply not worth it. You are wasting one of limited GCDs in which
                    you can heal your team, you are giving the enemy healer resolve for free,
                    which limits your team&apos;s ability to control them, and you are wasting your
                    knockback, which could be better utilized for your own survival or to separate
                    the enemy tank from your team&apos;s target.</p>
                <h3>Hardcasting Revivification</h3>
                <p>Hardcasting <span class="sprite sprite-revivification">Revivification</span>
                    is easier on your force than instant-casting it with
                    <span class="sprite sprite-resurgence">Resurgence</span>, which in turn is an
                    HPS gain. However, getting it interrupted is an HPS loss. So, if you want to try
                    and milk the extra HPS from this, it&apos;s important to ensure the enemy team
                    is not able to interrupt you.</p>
                <h4>Kick Baiting</h4>
                <p>If the enemy healer/ranged DPS are trying to interrupt you, the best way to thwart
                    their efforts is with something called <em>kick baiting</em>. The premise is,
                    immediately before you cast something that you do care about
                    (<span class="sprite sprite-revivification">Revivification</span>),
                    attempt to cast something that you don&apos;t care about
                    (<span class="sprite sprite-dark-infusion">Dark Infusion</span>)
                    so that anybody that&apos;s in the habit of interrupting you has their interrupt on
                    a long cooldown while you cast what you care about. The ideal timing for this is
                    to bait with <span class="sprite sprite-dark-infusion">Dark Infusion</span> when
                    <span class="sprite sprite-revivification">Revivification</span> has about 1 GCD
                    left on its cooldown, so as not to delay your reviv.</p>
                <h4>Abusing Swaps</h4>
                <p>If the enemy healer/ranged DPS are not interrupting you, it is easy to abuse the
                    short attention span of melee DPS to get hardcasts off. You&apos;ll want to time
                    your <span class="sprite sprite-revivification">Revivification</span>. Very simply,
                    if the enemy team has been targeting you for a couple seconds and is about to swap
                    on your teammate, hardcast your reviv. If they have been targeting your teammate
                    for a couple seconds and are about to swap on you, instant cast it.</p>
                <h4>Positioning to Hardcast</h4>
                <p>If the enemy healer/ranged DPS <em>want</em> to interrupt you, it&apos;s fairly
                    easy to deny them the opportunity to do so just by standing where they cannot
                    see you, but where you can still see your team. Generally this means standing
                    on the other side of a small LoS object from them, and peeking out just enough to
                    see where your team is playing. AOE abilities are pretty generous about being used
                    around walls, so you can even dip into cover when you cast
                    <span class="sprite sprite-revivification">Revivification</span>
                    and
                    <span class="sprite sprite-innervate">Innervate</span>
                    and pop back out when you use everything else. This is the ideal positioning for
                    when you are freecasting.</p>
                <h4>Bubble Stun as a Cast Window</h4>
                <p>If the enemy team is stacked, you can stand in the middle of them and use the 2
                    second stun from <span class="sprite sprite-static-barrier">Static Barrier</span>
                    to protect your hardcast, provided you start casting immediately after (or better,
                    slightly before) it goes off.</p>
                <h3>Clicking off Revivification</h3>
                <p>This is kind of a gimmick, but if you really want to maximize your HPS it&apos;s
                    worth noting that clicking off the HoT from
                    <span class="sprite sprite-revivification">Revivification</span>
                    while still inside the circle will cause you to pick it up again with full duration,
                    allowing you to get more healing out of the same ability. In real combat this seems
                    way too miniscule to be worth the effort, but perhaps if you&apos;re sitting AFK in
                    a stun or something you can get some value out of it.</p>
            </section>
<?php
require('include/guide-footer.php');
?>
        </div>
    </body>
</html>
