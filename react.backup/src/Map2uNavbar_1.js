/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
import React, { Component } from 'react';
import {render} from 'react-dom';

import { Navbar, Nav, NavItem, NavDropdown, MenuItem } from 'react-bootstrap';


class Map2uNavbar extends Component {
    handleFrameUpdate() {
            console.log("leftsidebarCollapsed=" + this.state.leftsidebarCollapsed);
            console.log("showFeatureAttributes=" + this.state.showFeatureAttributes);
            console.log("rightSidebarCollapsed=" + this.state.rightSidebarCollapsed);
            console.log("ol3mapSidebarCollapsed=" + this.state.ol3mapSidebarCollapsed);
            console.log("\n");
            
    };
    render() {
        return (
            <Navbar className="navbar-fixed-top navbar-top">
                <Navbar.Header>
                    <Navbar.Brand>
                        <a href="#home">React-Bootstrap</a>
                    </Navbar.Brand>
                </Navbar.Header>
                <Nav>
                    <NavItem eventKey={1} href="#">
                        Link
                    </NavItem>
                    <NavItem eventKey={2} href="#">
                        Link
                    </NavItem>
                    <NavDropdown eventKey={3} title="Dropdown" id="basic-nav-dropdown">
                        <MenuItem eventKey={3.1}>Action</MenuItem>
                        <MenuItem eventKey={3.2}>Another action</MenuItem>
                        <MenuItem eventKey={3.3}>Something else here</MenuItem>
                        <MenuItem divider />
                        <MenuItem eventKey={3.4}>Separated link</MenuItem>
                    </NavDropdown>
                </Nav>
            </Navbar>
        );
    }
};


export { Map2uNavbar };