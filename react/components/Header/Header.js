import React, {Component} from 'react';
import PropTypes from 'prop-types';
import {
  Nav,
  NavbarBrand,
  NavbarToggler,
  NavItem,
  NavLink,
  UncontrolledDropdown,
  DropdownToggle,
  DropdownMenu,
  DropdownItem,  
  Badge
} from 'reactstrap';
import HeaderDropdown from './HeaderDropdown';

class Header extends Component {

  constructor(props) {
    super(props);
  }

  sidebarToggle(e) {
    e.preventDefault();
    document.body.classList.toggle('sidebar-hidden');
  }

  sidebarMinimize(e) {
    e.preventDefault();
    document.body.classList.toggle('sidebar-minimized');
  }

  mobileSidebarToggle(e) {
    e.preventDefault();
    document.body.classList.toggle('sidebar-mobile-show');
  }

  asideToggle(e) {
    e.preventDefault();
    document.body.classList.toggle('aside-menu-hidden');
  }

  render() {
    return (
      <header className="app-header navbar">
        <NavbarToggler className="d-lg-none" onClick={this.mobileSidebarToggle}>
          <span className="navbar-toggler-icon"></span>
        </NavbarToggler>
        <NavbarBrand href="#"></NavbarBrand>
        <NavbarToggler className="d-md-down-none" onClick={this.sidebarToggle}>
          <span className="navbar-toggler-icon"></span>
        </NavbarToggler>
        <Nav className="ml-auto" navbar>
                <UncontrolledDropdown nav innavbar="true">
                    {/*Warning: React does not recognize the `inNavbar` prop on a DOM element.*/}
                    {/*waiting for reactstrap@5.0.0-alpha.5*/}
                    <DropdownToggle nav caret>
                      WILDLIFE
                    </DropdownToggle>
                    <DropdownMenu>
                      <DropdownItem>
                        Stations
                      </DropdownItem>
                      <DropdownItem>
                        Birds
                      </DropdownItem>

                    </DropdownMenu>
                  </UncontrolledDropdown>
        
          <NavItem className="px-3">
            <NavLink href="#">COMUNITY</NavLink>
          </NavItem>
        
              
        
        
        <UncontrolledDropdown nav innavbar="true">
                    {/*Warning: React does not recognize the `inNavbar` prop on a DOM element.*/}
                    {/*waiting for reactstrap@5.0.0-alpha.5*/}
                    <DropdownToggle nav caret>
                      RESEARCH
                    </DropdownToggle>
                    <DropdownMenu>
                      <DropdownItem>
                        Lillian Meighen Wright Centre
                      </DropdownItem>
                      <DropdownItem>
                        Research Projects
                      </DropdownItem>
                         <DropdownItem>
                        Graduate Student Research
                      </DropdownItem>
                         <DropdownItem>
                        LAS Nubes Project
                      </DropdownItem>
                         <DropdownItem>
                        OdD/UCR
                      </DropdownItem>
                         <DropdownItem>
                        CCT
                      </DropdownItem>
                       <DropdownItem>
                        UNA
                      </DropdownItem>

                    </DropdownMenu>
                  </UncontrolledDropdown>
        
          <NavItem className="px-3">
            <NavLink href="#">ABOUT</NavLink>
          </NavItem>
        </Nav>
        <Nav className="ml-auto" navbar>
          <NavItem className="d-md-down-none">
            <NavLink href="#"><i className="icon-bell"></i><Badge pill color="danger">5</Badge></NavLink>
          </NavItem>
          <NavItem className="d-md-down-none">
            <NavLink href="#"><i className="icon-list"></i></NavLink>
          </NavItem>
          <NavItem className="d-md-down-none">
            <NavLink href="#"><i className="icon-location-pin"></i></NavLink>
          </NavItem>
          <HeaderDropdown/>
        </Nav>
        <NavbarToggler className="d-md-down-none" onClick={this.asideToggle}>
          <span className="navbar-toggler-icon"></span>
        </NavbarToggler>
      </header>
    );
  }
}

export default Header;
