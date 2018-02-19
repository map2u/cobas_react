import React from 'react'

import {ol} from "openlayers";

import { Map } from '../react-openlayers'

import { PropTypes }    from 'prop-types'

class Tab extends React.Component {
  
  render() {
    const active = this.props.active ? ' active' : '';
    var closeIcon;
    if (typeof(this.props.closeIcon) === 'string')
      closeIcon = <i className={this.props.closeIcon} />;
    else if (typeof(this.props.closeIcon) === 'object')
      closeIcon = this.props.closeIcon;
    else {
      const closecls = this.props.position === 'right' ? "fa fa-caret-right" : "fa fa-caret-left";
      closeIcon = <i className={closecls} />
    }
    return (
      <div id={this.props.id} className={"sidebar-pane" + active}>
        <h1 className="sidebar-header">
          {this.props.header}
          <div className="sidebar-close" onClick={this.props.onClose}>
            {closeIcon}
          </div>
        </h1>
        {this.props.children}
      </div>
    );
  }
}

Tab.propTypes = {
    id: PropTypes.string.isRequired,
    header: PropTypes.string.isRequired,
    icon: PropTypes.oneOfType([PropTypes.string, PropTypes.element]).isRequired,
    anchor: PropTypes.oneOf(['top', 'bottom']),
    disabled: PropTypes.bool,
    // Provided by the Sidebar; don't mark as required (user doesn't need to include them):
    updateWindows: PropTypes.func,
    onClose: PropTypes.func,
    closeIcon: PropTypes.oneOfType([PropTypes.string, PropTypes.element]),
    position: PropTypes.oneOf(['left', 'right']),
    active: PropTypes.bool,
};
  
// https://github.com/facebook/react/issues/2979#issuecomment-222379916
const TabType = PropTypes.shape({
  type: PropTypes.oneOf([Tab])
});

class Sidebar extends Map<olElement, Props> {
    constructor(props) {
    super(props);
//    this.setState(
//       this.state.menuSpanVisibility =props.menuSpanVisibility    
//      )
   
  }
  
  updateWindows(e) {
     this.props.updateWindows && this.props.updateWindows(); 
  }
  onClose(e) {
    e.preventDefault();
    e.stopPropagation();
    document.body.classList.remove('show_ol3map_sidebar');
    this.props.onClose && this.props.onClose();
    this.updateWindows(e);
  }
  onClick(e,tabid) {
      console.log(this.props);
      
      console.log(tabid);
      
      if(this.props.collapsed===true) {
           e.preventDefault();
            e.stopPropagation();
            document.body.classList.add('show_ol3map_sidebar');
            
            this.props.onOpen && this.props.onOpen(tabid);
            this.updateWindows(e);
        }
      else if(this.props.selected===tabid)
      {
            e.preventDefault();
            e.stopPropagation();
             document.body.classList.remove('show_ol3map_sidebar');
            this.props.onClose && this.props.onClose();
            this.updateWindows(e);
             
      }
      else {
            e.preventDefault();
            e.stopPropagation();
           
             document.body.classList.add('show_ol3map_sidebar');
            this.props.onOpen && this.props.onOpen(tabid);
            this.updateWindows(e);
           
      }
  }
  onOpen(e, tabid) {
    e.preventDefault();
    e.stopPropagation();
    
        document.body.classList.add('show_ol3map_sidebar');
    
    this.props.onOpen && this.props.onOpen(tabid);
    this.updateWindows(e);
  }

  renderTab(tab) {
    var icon;
    if (typeof(tab.props.icon) === 'string')
      icon = <i className={tab.props.icon} />;
    else if (typeof(tab.props.icon) === 'object')
      icon = tab.props.icon;
    const active = tab.props.id === this.props.selected ? ' active' : '';
    const disabled = tab.props.disabled ? ' disabled' : '';
    return (
      <li className={active + disabled} key={tab.props.id}>
        <a href={'#' + tab.props.id} role="tab" onClick={e => tab.props.disabled || this.onClick(e, tab.props.id,tab.props.collapsed)}>
          {icon}
        </a>
      </li>
    );
  }

  renderPanes(children) {
    return React.Children.map(children,
        p => React.cloneElement(p, {onClose: this.onClose.bind(this),
                                    closeIcon: this.props.closeIcon,
                                    active: p.props.id === this.props.selected,
                                    position: this.props.position || 'right'}));
  }

  // Override render() so the <Map> element contains a div we can render to
  render() {
    const position = ' ol3map-sidebar-' + (this.props.position || 'right');
    const collapsed = this.props.collapsed ? ' collapsed' : '';

    const tabs = React.Children.toArray(this.props.children);
    const bottomtabs = tabs.filter(t => t.props.anchor === 'bottom');
    const toptabs = tabs.filter(t => t.props.anchor !== 'bottom');
    return (
      <div id={this.props.id} className={"ol3map-sidebar ol-touch" + position + collapsed}
        ref={el => this.rootElement = el}>
        <div className="ol3map-sidebar-tabs">
          <ul role="tablist">   {/* Top-aligned */}
            {toptabs.map(t => this.renderTab(t))}
          </ul>
          <ul role="tablist">   {/* Bottom-aligned */}
            {bottomtabs.map(t => this.renderTab(t))}
          </ul>
        </div>
        <div className="sidebar-content">
          {this.renderPanes(this.props.children)}
        </div>
      </div>
    );
  }
}

Sidebar.propTypes= {
    id: PropTypes.string.isRequired,
    originalTitle: PropTypes.string,
    dataContainer: PropTypes.string,
    dataPlacement: PropTypes.string,
    title: PropTypes.string,
    collapsed: PropTypes.bool,
    position: PropTypes.oneOf(['left', 'right']),
    selected: PropTypes.string,
    closeIcon: PropTypes.oneOfType([PropTypes.string, PropTypes.element]).isRequired,
    onClose: PropTypes.func,
    onOpen: PropTypes.func,
    updateWindows: PropTypes.func,
    children: PropTypes.oneOfType([
      PropTypes.arrayOf(TabType),
      TabType
    ]).isRequired,
};
  
export { Sidebar, Tab }
