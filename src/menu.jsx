import React from 'react';
import { AppBar, Toolbar, Typography, IconButton, Drawer, Box, Divider } from '@mui/material';
import MenuIcon from '@mui/icons-material/Menu';
import CloseIcon from '@mui/icons-material/Close';

class Menu extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      drawerOpen: false,
    };

    this.openDrawer = this.openDrawer.bind(this);
    this.closeDrawer = this.closeDrawer.bind(this);
  }

  openDrawer (event) {
    event.preventDefault();
    this.setState({drawerOpen: true});
  }

  closeDrawer (event) {
    event.preventDefault();
    this.setState({drawerOpen: false});
  }

  render () {
    return (
      <AppBar position="absolute" sx={{ justifyContent: 'center' }}>
        <Toolbar>
          <Typography variant="h6" color="inherit" sx={{ textAlign: 'center', flexGrow: 1 }}>Natalyh&apos;s SWTOR Guides</Typography>
          <Drawer anchor="right" variant="temporary" open={this.state.drawerOpen} onClose={this.closeDrawer}>
            <Box sx={{ m: 1, mt: 0 }}>
              <Typography variant="subtitle1" color="textPrimary" sx={{ display: 'flex', flexDirection: 'row', alignItems: 'center', flexWrap: 'wrap' }}>
                <IconButton edge="start" color="inherit" onClick={this.closeDrawer}>
                  <CloseIcon />
                </IconButton>
                Guides
              </Typography>
              <Divider sx={{ mb: 2 }} />
              <Typography variant="body2" color="textPrimary">
                No guides have been published yet.
              </Typography>
            </Box>
          </Drawer>
          <IconButton edge="end" color="inherit" onClick={this.openDrawer}>
            <MenuIcon />
          </IconButton>
        </Toolbar>
      </AppBar>
    );
  }
}

export default Menu;
