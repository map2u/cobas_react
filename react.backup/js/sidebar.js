/*
 * dev/App.js
 * Author: H.Alper Tuna <halpertuna@gmail.com>
 * Date: 21.08.2016
 */

/* eslint import/no-extraneous-dependencies: ["error", {"devDependencies": true}] */
/* eslint-env browser */

import React from 'react';
import { render } from 'react-dom';

import MetisMenu from '../src/react-metismenu/index';
import { PropTypes }    from 'prop-types'

const { FaIcon, FaStack } = require('react-fa-icon');

const menu1 = [
  {
    id: 1,
    icon: 'dashboard',
    label: 'Menu 1',
    to: '#menu-1',
    level: 1
  },
  {
    id: 2,
    icon: 'bell',
    label: 'Menu 2',
    to: '#menu-2',
       level: 1
  },
  {
    id: 3,
    icon: 'bolt',
    label: 'Menu 3',
    content: [
      {
        id: 4,
        icon: 'bolt',
        label: 'Test',
        to: '#test',
      },
    ],
  },
  {
    id: 5,
    icon: 'bars',
    label: 'Menu 4',
    content: [
      {
        id: 6,
        icon: 'bold',
        label: 'Sub Menu 1',
        to: '#sub-menu-1',
      },
      {
        id: 7,
        icon: 'italic',
        label: 'Sub Menu 2',
        content: [
          {
            id: 8,
            icon: 'cog',
            label: 'Level 3 Menu 1',
            to: '#level-3-menu-1',
          },
          {
            id: 9,
            icon: 'group',
            label: 'Level 3 Menu 2',
            to: '#level-3-menu-2',
          },
        ],
      },
      {
        id: 10,
        icon: 'image',
        label: 'Sub Menu 3',
        content: [
          {
            id: 11,
            icon: 'cog',
            label: 'Level 3 Menu 3',
            to: '#level-3-menu-3',
          },
          {
            id: 12,
            icon: 'group',
            label: 'Level 3 Menu 4',
            to: '#level-3-menu-4',
          },
        ],
      },
      {
        id: 13,
        icon: 'check',
        label: 'Sub Menu 4',
        to: '#sub-menu-4',
      },
    ],
  },
  {
    id: 14,
    icon: 'external-link',
    label: 'External Link',
    className: 'nav-first-level',
    externalLink: true,
    to: 'https://www.google.com',
  },
  
   {
    id: 15,
    icon: 'chevron-circle-left',
    label: 'Collapse Menu',
    className: 'hidden-xs sidebar-toggle', 
     isCollapseButton: true,
    to: ''
  }
  
];

const menu2 = [
  {
    id: 1,
    icon: 'bolt',
    label: 'Menu 3',
  },
  {
    id: 2,
    parentId: 1,
    icon: 'bolt',
    label: 'Test',
    to: '#test',
  },
  {
    id: 3,
    icon: 'bars',
    label: 'Menu 4',
  },
  {
    id: 4,
    parentId: 3,
    icon: 'bold',
    label: 'Sub Menu 1',
    to: '#sub-menu-1',
  },
  {
    id: 5,
    parentId: 3,
    icon: 'image',
    label: 'Sub Menu 2',
  },
  {
    id: 6,
    parentId: 5,
    icon: 'cog',
    label: 'Level 3 Menu 1',
    to: '#level-3-menu-1',
  },
  {
    id: 7,
    parentId: 5,
    icon: 'group',
    label: 'Level 3 Menu 2',
    to: '#level-3-menu-2',
  },
  {
    id: 8,
    icon: 'chevron-circle-left',
    label: 'Collapse Menu',
    isCollapseButton: true,
     to: ''
  }
  
];


class Map2uLeftsidebar extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      handleFrameUpdate: props.handleFrameUpdate,  
      menuSpanVisibility: props.menuSpanVisibility,
      menu: menu1,
      top_menu: menu1,
      bottom_menu: menu2
    };
  }
  handleFrameUpdate() {
            console.log("Map2uLeftsidebar leftsidebarCollapsed=" + this.state.leftsidebarCollapsed);
            console.log("Map2uLeftsidebar showFeatureAttributes=" + this.state.showFeatureAttributes);
            console.log("Map2uLeftsidebar rightSidebarCollapsed=" + this.state.rightSidebarCollapsed);
            console.log("Map2uLeftsidebar ol3mapSidebarCollapsed=" + this.state.ol3mapSidebarCollapsed);
            console.log("\n");
            
  };  
  render() {
    return (
     
        <MetisMenu
          ref={(r) => { this.menu = r; }}
          top_items={menu1}    
          bottom_items={menu2}    
          activeLinkFromLocation
          handleFrameUpdate={this.state.handleFrameUpdate}  
          activeLinkLabel={this.state.activeLinkLabel}
          activeLinkId={this.state.activeLinkId}
          classNameItemHasVisibleChild="open"
          className="menu"
          closeIcon="fa fa-window-close"
          onSelected={(e) => {
            // e.preventDefault();
            console.log('onSelected', e);
          }}
          content={this.state.menu}
        />
       
    );
  }
}
Map2uLeftsidebar.propTypes= {
    handleFrameUpdate: PropTypes.func,
    menuSpanVisibility: PropTypes.bool
 
};

export {Map2uLeftsidebar};
