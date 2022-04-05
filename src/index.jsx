import React from 'react';
import ReactDOM from 'react-dom';
import Menu from './menu';
import { Divider, Grid, Paper, Typography } from '@mui/material';

class App extends React.Component {
  render () {
    return (
      <Grid container spacing={8}>
        <Grid item xs={12}>
          <Menu />
        </Grid>
        <Grid item xs={12}>
          <Paper elevation={1} sx={{ mt: {xs: 0, sm: 1}, mx: {xs: 1, sm: 2}, py: 2, px: 4 }}>
            <div id="intro">
              <Typography variant="body1" color="textPrimary" paragraph={true}>
                Hello everyone! My name is Natalyh (obviously this is not my real name, it&apos;s the name of one of my toons that people started to know me by.) I started playing SWTOR in 2018 as a story noob and then at some point later got into PvP and ranked just in time to experience the end of Season 10 (and somehow stumble my way into a bronze).
              </Typography>
              <Typography variant="body1" color="textPrimary" paragraph={true}>
                I started playing on Satele Shan during seasons 10, 11, and 12, then during preseason 13 made the transition to Star Forge, where I got my first gold later that season. Like most people who still play at this point, I&apos;ve left and come back to this game a number of times and I like to maintain a presence on all servers, though being a west coast player with shitty wifi makes it very difficult to play on European servers most of the time. I do like to travel though, so you may see me over there if I happen to be on the right side of the world at the time.
              </Typography>
            </div>
            <Divider sx={{ my: 2 }} />
            <div id="faq">
              <Typography variant="h4" color="textPrimary" sx={{ fontWeight: 500, my: 1 }}>FAQ</Typography>
              <div id="faq-classes">
                <Typography variant="h5" color="textPrimary">What do you play?</Typography>
                <Typography variant="body1" color="textPrimary" paragraph={true}>
                  I am primarily a sorcerer main (and sage, it&apos;s literally the same class), mostly because 90% of the reason I enjoy this game is shooting lightning at people. As any ranked player should I have played all classes at a reasonable level in regs, though I would hardly qualify that as experience. In an attempt to diversify my skillset I have also played Mercernary and Sniper in ranked a fair (silver) bit. I find melee classes don&apos;t really fit my playstyle well, but I do dabble with Lethality Operative and Hatred Assassin because I enjoy dot spreading.
                </Typography>
              </div>
              <div id="faq-girl">
                <Typography variant="h5" color="textPrimary">Are you a girl?</Typography>
                <Typography variant="body1" color="textPrimary" paragraph={true}>
                  Unfortunately, no. This is the name of one of my story toons that happened to be female and people started to identify me by, so here we are. I&apos;ll still take your free shit if you want to give it to me, though.
                </Typography>
              </div>
              <div id="faq-prum">
                <Typography variant="h5" color="textPrimary">Nat, you&apos;re shit.</Typography>
                <Typography variant="body1" color="textPrimary" paragraph={true}>
                  Thanks, Prum.
                </Typography>
              </div>
              <div id="faq-contact">
                <Typography variant="h5" color="textPrimary">How can I contact you?</Typography>
                <Typography variant="body1" color="textPrimary" paragraph={true}>
                  Message Jiddar#3146 on Discord, ideally. Some guy made a spoof discord for me so double check that number at the end.
                </Typography>
              </div>
            </div>
          </Paper>
        </Grid>
      </Grid>
    );
  }
}

ReactDOM.render(
  <App />,
  document.getElementById("root")
);
