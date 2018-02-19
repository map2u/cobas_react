import React from 'react';
import {Route, Link} from 'react-router-dom';
import {Breadcrumb, BreadcrumbItem} from 'reactstrap';
import routes from '../../routes';

const findRouteName = url => routes[url];

const getPaths = (pathname) => {
  const paths = ['/'];

  if (pathname === '/') return paths;

  pathname.split('/').reduce((prev, curr, index) => {
    const currPath = `${prev}/${curr}`;
    paths.push(currPath);
    return currPath;
  });
  return paths;
};

const BreadcrumbsItem = ({...rest, match}) => {
  const routeName = findRouteName(match.url);
  if (routeName) {
    return (
      match.isExact ?
        (
          <BreadcrumbItem active>{routeName}</BreadcrumbItem>
        ) :
        (
          <BreadcrumbItem>
            <Link to={match.url || ''}>
              {routeName}
            </Link>
          </BreadcrumbItem>
        )
    );
  }
  return null;
};

const Breadcrumbs = ({...rest, location : {pathname}, match}) => {
  const paths = getPaths(pathname);
  const items = paths.map((path, i) => <Route key={i++} path={path} component={BreadcrumbsItem}/>);
  return (
       
    <Breadcrumb>
      {items}
      <div className="breadcrumb-right-side"><input type="text" name="query_keyword"/><button className="search_button"><i className="fa fa-search"></i></button><button className="btn btn-sm btn-default map2u-showmap"><i className="fa fa-globe"></i></button></div>                           
    </Breadcrumb>
    
  );
};

export default props => (
  <div>
    <Route path="/:path" component={Breadcrumbs} {...props} />
    
  </div>
);
