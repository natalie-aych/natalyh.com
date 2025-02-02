<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="Natalyh" />
        <meta name="description" content="A new player&apos;s guide for how to play the Corruption Sorcerer specialization in PvP arenas and warzones." />
        <meta property="og:description" content="A new player&apos;s guide for how to play the Corruption Sorcerer specialization in PvP arenas and warzones." />
        <meta property="og:title" content="SWTOR 7.3 Corruption PvP Guide" />
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
        <title>SWTOR 7.3 Corruption PvP Guide / Natalyh&apos;s SWTOR Guides</title>
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
                <h1>SWTOR 7.3 Corruption PvP Guide</h1>
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
                    is literal shit in the past two expansions. Your role is to
                    identify where the enemy team's damage is going, and pattern match
                    your heals accordingly. It&apos;s honestly very akin to farming
                    when done properly, and will net you big numbers and look cool.
                    If you&apos;re doing it right, your team&apos;s health bars should
                    be more or less uniform (or at least those taking damage), and the
                    process should feel like wrestling against the DPS. However, if
                    one teammate randomly drops much lower than the others (due to the
                    tank missing a guard swap or the dps missing a dcd), that is the
                    fault of the person who missed their cue and you should get upset
                    with them because having to compensate that difference will likely
                    jeopardize your team&apos;s ability to survive as a unit. That is
                    not the same thing as you letting someone get low because you
                    failed to track the incoming damage, however. In that case
                    it&apos;s your fault and you should apologize.</p>
                <p>In the event that the game doesn&apos;t give you a tank, most of
                    the above doesn&apos;t apply, and you&apos;ll have to spec
                    according to the fact that unless the enemy team is braindead they
                    will drop somebody straight through your healing. In that event
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
                    will not need to heal cleave, but the presence of certain specs on
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
                        shorten cast times, but since as healers we are interrupted
                        hyper-aggressively, we want to cast as little as possible,
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
                        team is punishing your gearing mistake by killing you easily.</p>
                    <h3>Augments</h3>
                    <p>If you use the build I&apos;ve prescribed, all of your augments
                        should be crit augments. If you&apos;re freestyling,
                        you&apos;ll want to use augments to reach the proper stat
                        thresholds, that being &geq;2050 alacrity (for 1.4 second GCD);
                        the rest of your stats go into crit. Do not use accuracy on a
                        healer, ever. It is the most telegraphed noob thing you can do
                        in this game. Heals can&apos;t miss.</p>
                </div>
                <div id="build-cleave">
                    <h2>Healing Cleave Build</h2>
                    <p>This is your generalist build for healing in tank games, AOE
                        situations, or 8v8 warzones. It has slighly lower burst
                        healing in exchange for the ability to spread your
                        <span class="sprite sprite-resurgence">Resurgence</span>
                        heal-over-time effect to up to 3 additional targets. Your
                        implant (Revitalize) will cause your
                        <span class="sprite sprite-revivification">Revivification</span>
                        AOE heal to proc additional healing on spread targets,
                        creating a field of intense periodic healing that is your
                        bread and butter for keeping up with AOE and periodic damage.
                    </p>
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
                    <h2>Healing Burst Build</h2>
                    <p>If you have no use for spreading your
                        <span class="sprite sprite-resurgence">Resurgence</span>,
                        for example, only one player is taking damage, then you may as
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
            </section>
            <hr />
            <section id="rotation">
                <h2>Rotation</h2>
                <h3>Abilities</h3>
                <p>Corruption has six rotational rotational heals which you will use
                    frequently. For healing cleave, you will use them in priority
                    order, and always place them on the target with lowest health.
                    For healing burst, you will use them in sets of specific
                    combinations, with
                    <span class="sprite sprite-innervate">Innervate</span>
                    in between combos. People do die through Innervate but there
                    isn&apos;t a lot you can do about it. Burst damage just outpaces
                    burst healing by orders of magnitude. Using your stun
                    (<span class="sprite sprite-electrocute">Electrocute</span>)
                    and knockback
                    (<span class="sprite sprite-overload">Overload</span>)
                    to prevent incoming burst damage to yourself or your teammate is
                    a good way to mitigate this problem. If the enemy targets you,
                    your greatest defensive will actually be your positioning, which
                    we&apos;ll talk about in a later section.
                </p>
                <p>These abilities you will use rotationally are
                    <span class="sprite sprite-resurgence">Resurgence</span>,
                    <span class="sprite sprite-roaming-mend">Roaming Mend</span>,
                    <span class="sprite sprite-innervate">Innervate</span>,
                    <span class="sprite sprite-dark-heal">Dark Heal</span>,
                    <span class="sprite sprite-dark-infusion">Dark Infusion</span>,
                    <span class="sprite sprite-revivification">Revivification</span>,
                    <span class="sprite sprite-static-barrier">Static Barrier</span>,
                    and
                    <span class="sprite sprite-consuming-darkness">Consuming Darkness</span>.
                    Notice they are 75% green. When someone says to push green buttons,
                    they mean to spam these abilities into them ASAP because they need
                    more healing.
                </p>
                <h3 id="ocds">Offensive Cooldowns</h3>
                <p>You have two offensive cooldowns on sorc, these are
                    <span class="sprite sprite-recklessness">Recklessness</span>
                    and
                    <span class="sprite sprite-polarity-shift">Polarity Shift</span>.</p>
                <p><span class="sprite sprite-recklessness">Recklessness</span>
                    will make your next two abilities crit, guaranteed,
                    but it won&apos;t increase their critical bonus damage like a
                    normal autocrit would. As a rule of thumb, you want to use
                    <span class="sprite sprite-recklessness">Recklessness</span>
                    with
                    <span class="sprite sprite-innervate">Innervate</span>
                    and either
                    <span class="sprite sprite-unnatural-preservation">Unnatural Preservation</span>
                    or a proc&apos;d (glowy)
                    <span class="sprite sprite-dark-heal">Dark Heal</span>,
                    depending on whether you are the one taking the most damage. Worth
                    noting that
                    <span class="sprite sprite-revivification">Revivification</span>
                    will not consume Recklessness charges, so you can do something
                    like
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
                    you recover from the damage your team took while you were stunned.</p>
                <h3>Cleave Rotation: Priority System</h3>
                <p>Unless someone is in immediate jeopardy of dying (see burst combos),
                    use the ability highest on this list at any given time. Usually
                    you just want to target the lowest-health player at any given
                    time, but occasionally there is value to spread healing abilities
                    around to ensure equitable distribution. This is a judgement call
                    you have to make based on your team&apos;s health level and the
                    incoming damage profile.</p>
                <ol class="rotation-list">
                    <li><span class="sprite sprite-roaming-mend">Roaming Mend</span></li>
                    <li><span class="sprite sprite-static-barrier">Static Barrier</span>
                        on yourself &mdash; This will stun enemies and give you
                        breathing room to cast.</li>
                    <li><span class="sprite sprite-revivification">Revivification</span>
                        &mdash; Place on top of as many allies as possible.</li>
                    <li><span class="sprite sprite-resurgence">Resurgence</span></li>
                    <li><span class="sprite sprite-innervate">Innervate</span></li>
                    <li><span class="sprite sprite-dark-heal">Dark Heal</span>
                        &mdash; Only with proc (when it glows).</li>
                    <li><span class="sprite sprite-static-barrier">Static Barrier</span>
                        &mdash; On others.</li>
                    <li><span class="sprite sprite-consuming-darkness">Consuming Darkness</span>
                        &mdash; Try to weave about one of these in per
                        <span class="sprite sprite-innervate">Innervate</span> to
                        maintain your force.</li>
                </ol>
                <p>It&apos;s important to note that using
                    <span class="sprite sprite-resurgence">Resurgence</span>
                    immediately before
                    <span class="sprite sprite-revivification">Revivification</span>
                    will make it instant-cast and prevent you from being interrupted,
                    so you pretty much always want to do this except in the opener
                    (when the enemies aren&apos;t there yet), or under
                    <span class="sprite sprite-polarity-shift">Polarity Shift</span>.
                    Hardcasting is an HPS increase, but only if you don&apos;t get
                    interrupted, which is a huge gamble and not worth it when first
                    starting out.</p>
                <p>Similarly, using
                    <span class="sprite sprite-resurgence">Resurgence</span>
                    immediately before
                    <span class="sprite sprite-roaming-mend">Roaming Mend</span>
                    should be avoided at all costs unless only one person is taking
                    damage (even random dot damage), as it will waste the proc.
                </p>
                <h3 id="target-selection">Burst Combos</h3>
                <p>You have two primary burst combos that can shoot somebody&apos;s
                    health up. Generally you want to interleave an
                    <span class="sprite sprite-innervate">Innervate</span>
                    and a
                    <span class="sprite sprite-static-barrier">Static Barrier</span>
                    or a
                    <span class="sprite sprite-consuming-darkness">Consuming Darkness</span>
                    between the two depending on availability and your force level.
                </p>
                <p>The combinations are as follows:</p>
                <ol class="rotation-list">
                    <li><span class="sprite sprite-resurgence">Resurgence</span></li>
                    <li><span class="sprite sprite-roaming-mend">Roaming Mend</span></li>
                </ol>
                <p>and</p>
                <ol class="rotation-list">
                    <li><span class="sprite sprite-resurgence">Resurgence</span></li>
                    <li><span class="sprite sprite-dark-infusion">Dark Infusion</span>
                        or
                        <span class="sprite sprite-revivification">Revivification</span></li>
                    <li><span class="sprite sprite-dark-heal">Dark Heal</span></li>
                </ol>
                <p>Generally you&apos;ll choose
                    <span class="sprite sprite-dark-infusion">Dark Infusion</span>
                    if you can stand still and freecast without being interrupted, and
                    <span class="sprite sprite-revivification">Revivification</span>
                    if you need to move and instant-cast. The primary motivation for
                    this is if you are the enemy team&apos;s tunnel target.</p>
                <p>One possible way to piece this together is as follows:</p>
                <ol class="rotation-list">
                    <li><span class="sprite sprite-resurgence">Resurgence</span></li>
                    <li><span class="sprite sprite-roaming-mend">Roaming Mend</span></li>
                    <li><span class="sprite sprite-innervate">Innervate</span></li>
                    <li><span class="sprite sprite-consuming-darkness">Consuming Darkness</span></li>
                    <li><span class="sprite sprite-resurgence">Resurgence</span></li>
                    <li><span class="sprite sprite-static-barrier">Static Barrier</span></li>
                    <li><span class="sprite sprite-dark-infusion">Dark Infusion</span></li>
                    <li><span class="sprite sprite-dark-heal">Dark Heal</span></li>
                    <li><span class="sprite sprite-consuming-darkness">Consuming Darkness</span></li>
                </ol>
                <p>Realistically, though, your rotation will break down rapidly in the
                    presence of interrupts and stuns, so it&apos;s better to just
                    learn the two combos and innervate between them so you have some
                    flexibility to account for the unpredictable.</p>
                <h3>Force Management</h3>
                <p>Corruption is the only spec in the game that has active resource
                    management. This means that unlike DPS specs or other healers you
                    may be used to, your energy will not regenerate on its own, and
                    you will need to periodically use
                    <span class="sprite sprite-consuming-darkness">Consuming Darkness</span>
                    to ensure you don&apos;t run out. This is actually quite strong,
                    because it allows you to dump your force in times of urgency, and
                    regenerate it in times of safety. It does, however, have the
                    major downside of being extremely unintuitive to learn.</p>
                <p>Normally, and on DPS specs,
                    <span class="sprite sprite-consuming-darkness">Consuming Darkness</span>
                    gives you a debuff which decreases your natural force regeneration,
                    and should be avoided whenever possible. However, as corruption,
                    whenever your
                    <span class="sprite sprite-innervate">Innervate</span>
                    critically heals, you will receive a buff which allows you to use
                    <span class="sprite sprite-consuming-darkness">Consuming Darkness</span>
                    without penalty, instead granting a buff called
                    <strong>Reverse Corruptions</strong> which will actually increase
                    your natural force regeneration rate. No matter how you are
                    managing force, be it splurging or playing conservative, you
                    always want to at minimum keep this buff up at all times, which
                    means using
                    <span class="sprite sprite-consuming-darkness">Consuming Darkness</span>
                    with proc at least once every 10 seconds. If for some reason you
                    are screwed and need force immediately, you can also consume this
                    buff by using
                    <span class="sprite sprite-consuming-darkness">Consuming Darkness</span>
                    without the proc, which will prevent you from receiving the
                    <strong>Weary</strong> debuff which can nuke your force. You never
                    want to have <strong>Weary</strong> stacks on you, so make sure to
                    keep the
                    <span class="sprite sprite-innervate">Innervate</span>s
                    and
                    <span class="sprite sprite-consuming-darkness">Consuming Darkness</span>es
                    coming out regularly, at about a 2:3 ratio. Generally, there is
                    rhythm to this which you will get the hang of as you gain
                    experience.
                </p>
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
                    because the damage they will take will far outpace your heals, and
                    many more which will benefit from kiting although they could
                    probably afford to sit still and tank the damage. Your
                    responsibility as the healer is not actually to produce the
                    largest HPS number possible, but rather, to create the smallest
                    possible <em>incoming DPS - incoming HPS</em> difference, and
                    therefore in order to play competently you have to kite with
                    your target.</p>
                <p>Recall that by substituting
                    <span class="sprite sprite-dark-infusion">Dark Infusion</span>
                    for
                    <span class="sprite sprite-revivification">Revivification</span>
                    in your second healing combination, every single ability you use
                    can be activated on the move. Very few classes specs have this
                    luxury, and fewer still have the ability to keep up with your
                    mobility through the amount of control you can put out. This
                    means that you are actually at a massive advantage when following
                    a kiting target around objects, changing levels, running behind
                    walls, et cetera, as opposed to standing still. You will likely be
                    within melee range of your healing target to get maximum value out
                    of this strategy, and there&apos;s nothing wrong with that. If
                    your target does happen to be faster than you, you can also wait
                    for enemies to reach them and then use
                    <span class="sprite sprite-extrication">Extrication</span>
                    to pull them to your location, creating separation in the opposite
                    direction and likely confusing many of your enemies along the way.</p>
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
                    in the game should be able to outrun you once you are specced
                    into it.</p>
                <p><strong>Spoiler Warning:</strong> This is also your survival
                    strategy.</p>
            </section>
            <hr />
            <h3>Kiting / Damage Separation</h3>
            <h3>Peeling</h3>
            <h3>T/H Mechanics</h3>
            <h4>Hardcast vs. Instant Cast Reviv</h4>
            <h4>Bubble Stun Abuse</h4>
            <h4>Positioning to Hardcast</h4>
            <h4>Focus Target & Interrupting Enemy Healers</h4>
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
                    Corruption, it is absolutely mandatory. Your positioning is critical
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
                    <span class="sprite sprite-chain-corruption">Chain Corruption</span>
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
                <p>As a Corruption Sorc you have several way to heal yourself apart
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
                <p>Fortunately, in 7.1, Corruption received a bit of a saving grace in
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
                    to be extremely religious about avoiding damage, this minimizing
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
                <p>At difference to the other sorc specs, Corruption in particular
                    has a fair bit of passive damage reduction which you can use to
                    soften incoming attacks if you maintain it properly. In 6.0 and
                    7.0, damage reduction is always much less important than damage
                    avoidance, as you will be hit for more damage by exposing yourself
                    than you will be able to reduce, but if you are able to have both
                    then you should do so.</p>
                <p>Corruption has three sources of passive DR:
                    <ul>
                        <li>Activating
                            <span class="sprite sprite-corruption-bolt">Corruption Bolt</span>
                            will grant stacks of 5% damage reduction, up to 15%.</li>
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
                    The easiest way to maintain this DR is by using the 3x
                    <span class="sprite sprite-corruption-bolt">Corruption Bolts</span>
                    procced by
                    <span class="sprite sprite-force-speed">Force Speed</span>
                    in the opener, and then another
                    <span class="sprite sprite-corruption-bolt">Corruption Bolt</span>
                    each time that
                    <strong>Subversion</strong> is procced
                    (<span class="sprite sprite-corruption-bolt">Corruption Bolt</span>
                    will glow gold). The remainder of your <strong>Convection</strong>
                    procs from
                    <span class="sprite sprite-force-speed">Force Speed</span>
                    should be spent on
                    <span class="sprite sprite-thundering-blast">Thundering Blast</span>
                    (which will also glow gold).
                </p>
                <p>In addition to its passive DR, which should be active at all times,
                    the builds I have recommended have access to active DR every 45
                    seconds by way of
                    <span class="sprite sprite-cloud-mind">Cloud Mind</span>.
                    Cloud Mind grants 25% additional damage reduction for 6 seconds,
                    and should be used when you anticipate big incoming burst damage.
                    This is an intuition you will develop as you play, but a good rule
                    of thumb is that whenever you are snared or rooted (i.e. it&apos;s
                    hard for your character to move), big damage is on the way
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
                    order for this to work, which quite a small arena to play in.
                    Therefore, we will need to make some adjustments to our kiting
                    style.</p>
                <h4>Kiting With Tanks</h4>
                <p>With a tank on your team, you should play as if the enemy team is
                    entirely ranged (regardless of what it actually is). Guard does
                    not require line of sight to function, and thus you should make
                    yourself impossible to catch by playing ring-around-the-rosy with
                    an object an applying slows to the players chasing you in order
                    to slow down the incoming damage.</p>
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
                    to avoid wasting damage. As Corruption target swapping barely
                    impacts your damage as long as you swap back in time to refresh
                    <span class="sprite sprite-affliction">Affliction</span>
                    on the first target, which you can do with
                    <span class="sprite sprite-chain-corruption">Chain Corruption</span> / <span class="sprite sprite-halted-offensive">Halted Offensive</span>
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
                    <span class="sprite sprite-chain-corruption">Chain Corruption</span> / <span class="sprite sprite-halted-offensive">Halted Offensive</span>
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
                    <span class="sprite sprite-corruption-bolt">Corruption Bolt</span>,
                    rather than an instant-cast
                    <span class="sprite sprite-thundering-blast">Thundering Blast</span>.
                    This is actually a net improvement to your damage, but it comes at
                    a steep cost in terms of mobility, which is your highest priority
                    when kiting or chasing a target.
            </section>
<?php
require('include/guide-footer.php');
?>
        </div>
    </body>
</html>
